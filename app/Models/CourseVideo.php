<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseVideo extends Model
{

    protected $table
        = 'course_videos';


    public function user(){
        return $this->belongsTo('User');
    }

    use HasFactory;
}
