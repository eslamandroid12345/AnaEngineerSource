<?php

namespace App\Http\Controllers;
use App\Models\Artical;
use App\Models\Category;
use App\Models\Magazine;
use App\Models\Course;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function home (){

    $articals =Artical::latest()->take(4)->get();
    $magazeine =Magazine::all();
    $category =Category::all();
    $courses =Course::paginate(10);
    $user = Auth::user();


    return view ('home', compact('articals','courses','user','magazeine' , 'category'));

   }
}
