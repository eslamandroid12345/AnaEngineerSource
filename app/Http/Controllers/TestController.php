<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){

        return view('Front.course.homelms');
    }
    public function courses(){

        return view('Front.course.courses');
    }
    public function create_profile(){

        return view('Front.socialmedia.create');
    }




}
