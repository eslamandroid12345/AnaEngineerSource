<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\Sluggable\SlugOptions;
use Spatie\Sluggable\HasSlug;



class Magazine extends Model
{
    protected $guarded = [];

    use HasFactory,Searchable,HasSlug;

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
        ];
    }
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('slug')
            ->saveSlugsTo('slug');

    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
