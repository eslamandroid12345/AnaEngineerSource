<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;
use Laravel\Scout\Searchable;
use Laravelista\Comments\Commenter;
//use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable ,Searchable,Commenter;
    protected $fillable = [
        'name',
        'email',
        'password',
        'job',
        'University',
        'status',
        'designation',
        'image',
        'profile_cover',
        'facebook',
        'twitter',
        'linkedin',
        'phone',
        'city',
        'is_admin',
        'access_token',
        'oauth_token',
        'google_id',
        'facebook_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // public function post()
    // {

    //     return $this->hasMany('App\Models\Post');

    // }

//    public function getSlugOptions() : SlugOptions
//    {
//        return SlugOptions::create()
//            ->generateSlugsFrom('name')
//            ->saveSlugsTo('slug');
//    }
//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email
        ];
    }
    public function profile()
    {

        return $this->hasMany('App\Models\Profile');

    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function enrolls()
    {
        return $this->hasMany(Enroll::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function post()
    {

        return $this->hasMany('App\Models\Post');

    }
//    public function follows()
//    {
//        return $this->hasMany(Follow::class);
//    }
    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'following_id');
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'followers', 'following_id', 'follower_id');
    }

    public function enrollments()
    {
        return $this->belongsToMany(Course::class, 'enrollments')->withTimestamps();
    }

    public function likedPosts()
    {
        return $this->morphedByMany(Post::class, 'likeable');
    }

    public function isAdmin()
    {
        return $this->is_admin === 1;
    }
    public function isModerator()
    {
        return $this->is_admin === 2;
    }

}
