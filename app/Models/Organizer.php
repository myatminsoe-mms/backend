<?php

namespace App\Models;

use App\Traits\BasicAudit;
use App\Traits\SnowflakeID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class Organizer extends Model
{
    use BasicAudit, HasApiTokens, HasFactory, Notifiable, SnowflakeID;

    protected $fillable = [
        'name',
        'email',
        'company_legal_name',
        'position',
        'company_phone',
        'tax_payer_no',
        'website',
        'avatar',
        'description',
        'organizer_status',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'organizer_status',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function getAvatarAttribute($value)
    {
        if ($value) {
            $url = Storage::url($value);

            return $url;
        }

    }
}
