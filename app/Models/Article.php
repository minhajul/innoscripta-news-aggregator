<?php

namespace App\Models;

use Database\Factories\ArticleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    /** @use HasFactory<ArticleFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'source',
        'author',
        'category',
        'content',
        'description',
        'url',
        'image_url'
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($table) {
            $slug = Str::slug($table->title);

            if (static::whereSlug($slug)->exists()) {
                $original = $slug;
                $count = 2;

                while (static::whereSlug($slug)->exists()) {
                    $slug = "$original-".$count++;
                }
            }

            $table->slug = $slug;
        });
    }
}
