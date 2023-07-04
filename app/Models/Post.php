<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use HasFactory,  Likeable , SoftDeletes ;
    use SoftDeletes;
     use Commentable;

    protected $fillable = [
        'body',
        'photo',
        'user_id',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function comments()

    {
        return $this->hasMany(Comment::class,'post_id','id');
    }




}
