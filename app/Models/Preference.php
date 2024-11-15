<?php

namespace App\Models;

use Database\Factories\PreferenceFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    // Scopes
    public function scopeOfUser(Builder $query): void
    {
        $query->where('user_id', auth()->id());
    }

    // Relationship
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
