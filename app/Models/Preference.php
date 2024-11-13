<?php

namespace App\Models;

use Database\Factories\PreferenceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    /** @use HasFactory<PreferenceFactory> */
    use HasFactory;

    protected $fillable = [
        'source',
        'category',
        'author',
        'user_id',
    ];
}
