<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Laravel\Scout\Searchable;



class Artical extends Model
{
    use HasFactory,Searchable,HasSlug;

    protected $fillable = [
        'title',
        'img',
        'description',
        'min_description',
        'user_id',
        'tag1',
        'tag2',
        'tag3',
        'category_id',
    ];

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

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
        ];
    }
}
