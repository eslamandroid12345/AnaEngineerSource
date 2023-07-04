<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Profile;
use App\Models\Course;
use App\Models\Artical;
use App\Models\Comment;


class HeaderComposer
{

    public function compose(View $view)
    {
        $categories =Category::all();
        $view->with('categories', $categories);
    }

    public function courses()
        {
            $courses = Course::all();
            $view->with('courses', $courses);
        }
    public function articals()
        {
            $articals = Artical::all();
            $view->with('articals', $articals);
        }

    public function comment()
        {
            $comment = Comment::all();
            $view->with('comment', $comment);
        }






}




