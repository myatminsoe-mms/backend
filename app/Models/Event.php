<?php

namespace App\Models;

use App\Helpers\ConvertImageUrlsPathHelper;
use App\Traits\BasicAudit;
use App\Traits\SnowflakeID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Config;
use Laravel\Sanctum\HasApiTokens;

class Event extends Model
{
    use BasicAudit, HasApiTokens, HasFactory, Notifiable, SnowflakeID;

    // Add the deleted_files to appends
    //protected $appends = ['deleted_files'];
    protected $fillable = [
        'title',
        'organizer_id',
        'organizer_name',
        'event_template',
        'type_id',
        'type_name',
        'category_id',
        'category_name',
        'slug',
        'alternative_domain',
        'tags',
        'about',
        'location_types',
        'venue_address',
        'online_address',
        'map_url',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'banner_images',
        'agenda',
        'faqs',
        'additional_information',
        'event_images',
        'sponsors',
        'contact_information',
        'social_links',
        'event_status',
        'is_attendee_info_mandatory',
        'visibility',
        'publish_at',
        'end_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'agenda' => 'array',
        'tags' => 'array',
        'banner_images' => 'array',
        'faqs' => 'array',
        'event_images' => 'array',
        'sponsors' => 'array',
        'social_links' => 'array',
        'contact_information' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'event_tickets' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        // Register an updating event to handle image URLs
        static::updating(function ($event) {
            $event->changeImageUrls();
        });
    }

    public function organizer(): BelongsTo
    {
        return $this->belongsTo(Organizer::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function eventTickets(): HasMany
    {
        return $this->hasMany(EventTicket::class);
    }

    private function changeImageUrls()
    {
        // Change banner image URLs
        if(isset($this->banner_images)) {
            $this->banner_images = ConvertImageUrlsPathHelper::convertUrls($this->banner_images);
        }

        // Change event image URLs
        if(isset($this->event_images)) {
            $this->event_images = ConvertImageUrlsPathHelper::convertUrls($this->event_images);
        }

        // Change sponsor image URLs
        if(isset($this->sponsors)) {
            $this->sponsors = ConvertImageUrlsPathHelper::convertSponsorUrls($this->sponsors);
        }

        // Change agenda image URLs
        if(isset($this->agenda)){
            $this->agenda = ConvertImageUrlsPathHelper::convertAgendaUrls($this->agenda);
        }
    }

    #return the images with url

    public function getBannerImagesAttribute($value)
    {
        if($value){
            // Base URL for your images
            $baseUrl = Config::get('custom.aws_bucket_url');

            $bannerImagesArray = json_decode($value, true);

            // Prepend the base URL to each image URL in the array
            return array_map(function ($imageUrl) use ($baseUrl) {
                return $baseUrl . $imageUrl;
            }, $bannerImagesArray);
        }
    }

    public function getEventImagesAttribute($value)
    {
        if($value) {
            // Base URL for your images
            $baseUrl = Config::get('custom.aws_bucket_url');

            $eventImagesArray = json_decode($value, true);

            // Prepend the base URL to each image URL in the array
            return array_map(function ($imageUrl) use ($baseUrl) {
                return $baseUrl . $imageUrl;
            }, $eventImagesArray);
        }

    }

    public function getAgendaAttribute($value)
    {
        if($value)
        {
            // Decode the JSON string to convert it into an array
            $agendaArray = json_decode($value, true);

            // Base URL for your images
            $baseUrl = Config::get('custom.aws_bucket_url');

            // Modify each agenda item to prepend base URL to image URLs (if applicable)
            foreach ($agendaArray as &$agendaItem) {
                if (isset($agendaItem['slots'])) {
                    foreach ($agendaItem['slots'] as &$slot) {
                        if (isset($slot['performers'])) {
                            foreach ($slot['performers'] as &$performer) {
                                if (isset($performer['image'])) {
                                    $performer['image'] = $baseUrl . $performer['image'];
                                }
                            }
                        }
                    }
                }
            }

            return $agendaArray;
        }
    }

    public function getSponsorsAttribute($value)
    {
        if($value) {
            // Decode the JSON string to convert it into an array
            $sponsorsArray = json_decode($value, true);

            // Base URL for your images
            $baseUrl = Config::get('custom.aws_bucket_url');

            // Modify each sponsor item to prepend base URL to image URLs (if applicable)
            foreach ($sponsorsArray as &$sponsor) {
                if (isset($sponsor['images'])) {
                    foreach ($sponsor['images'] as &$image) {
                        $image['name'] = $baseUrl . $image['name'];
                    }
                }
            }

            return $sponsorsArray;
        }
    }
}
