<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;
use Spatie\Sluggable\HasSlug;

class Course extends Model
{
    use HasFactory,HasSlug;

    protected $fillable = [
        'name', 'user_id' ,'description', 'price','price_online', 'price_offline','photo','payment_link_price' , 'payment_link_online' , 'payment_link_offline'

    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'enrollments')->withTimestamps();
    }

    public function getAverageAttribute()
    {
        return (int)$this->reviews()->where('user_id', auth()->user()->id)->avg('rating');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
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
