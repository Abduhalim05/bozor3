<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable=[
        'address',
        'phone',
        'email',
        'instagram',
        'telegram',
        'youtube',
        'facebook',
    ];
}
