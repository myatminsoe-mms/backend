<?php

namespace App\Models;

use App\Traits\BasicAudit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    use BasicAudit, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'file_url',
        'model_id',
        'model_name',
        'is_completed',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];
}
