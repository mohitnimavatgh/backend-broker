<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'aadhar_card_number',
        'pancard',
        'title',
        'description',
        'start_date',
        'end_date',
        'certificate_photo',
    ];

    protected $hidden = [
        'aadhar_verified_at',       
        'updated_at',
        'created_at',
    ];
}
