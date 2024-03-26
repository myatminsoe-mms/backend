<?php

namespace App\Models;

use App\Traits\BasicAudit;
use App\Traits\SnowflakeID;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class EventTicket extends Model
{
    use BasicAudit, Notifiable, SoftDeletes;

    // Add the status attribute to appends
    protected $appends = ['ticket_status'];

    protected function ticketStatus(): Attribute
    {
        return Attribute::make(
            get: function () {
                $now = Carbon::now();
                $saleStartAt = Carbon::parse($this->sale_start_at);
                $earlyEndAt = Carbon::parse($this->early_end_at);
                $saleEndAt = Carbon::parse($this->sale_end_at);

                // Check if sale_start_at is in the future
                if ($saleStartAt > $now) {
                    return 'Scheduled';
                }

                // Check if early_end_at, early bird sale
                if ($earlyEndAt > $now) {
                    return 'Early Bird Sale';
                }

                // Check if sale_end_at is in the past
                if ($saleEndAt < $now) {
                    return 'Sale Ended';
                }

                // If current time is between sale_start_at and sale_end_at
                return 'On Sale';
            }
        );
    }
    protected $fillable = [
        'id',
        'name',
        'entry_date',
        'price',
        'event_id',
        'ticket_types',
        'initial_quantity',
        'remaining_quantity',
        'sale_start_at',
        'sale_end_at',
        'description',
        'early_price',
        'early_start_at',
        'early_end_at',
        'ticket_visibility',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
