<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Article extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'image',
        'title',
        'source_url',
        'tags',
        'content',
        'source_url',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function getTagsModelsAttribute()
    {
        return Tag::whereIn('id', $this->tags)->get();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public static function search($query)
    {
        return self::whereRaw("MATCH(title, content) AGAINST(? IN BOOLEAN MODE)", [$query]);
    }
}
