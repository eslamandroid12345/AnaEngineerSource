<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Artical;
use App\Models\Course;
use App\Models\Magazine;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Video;
use App\Models\Section;
use App\Models\Category;
use App\Models\UserCourse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class IndexController extends Controller
{
    public function allCourses(Request $request)
    {
        $courses = Course::query();

        if ($request->has('price')) {
            switch ($request->input('price')) {
                case 'free':
                    $courses->where('price', 0);
                    break;
                case 'low-to-high':
                    $courses->orderBy('price', 'asc');
                    break;
                case 'high-to-low':
                    $courses->orderBy('price', 'desc');
                    break;
                case 'paid':
                    $courses->where('price', '>', 0);
                    break;
                default:
                    // no additional filtering needed for "all" prices
                    break;
            }
        }

        $courses = $courses->paginate(8);
        $categories = Category::all();
        return view('Front.course.courses', compact('courses' , 'categories'));

    }


    public function detailsCourse($slug)
    {
    if (Auth::check()) {
            $user = Auth::user();
            $course = Course::where('slug', $slug)->firstOrFail();
            $text = UserCourse::where('user_id' , '=', $user->id)->where('course_id', '=', $course->id)->get()->first();
            $enroll = (isset($text))?$text->course_enrolled:'';
            $comp = UserCourse::where('user_id', '=', $user->id)->where('course_id', '=', $course->id)->get()->first();
            $complete = (isset($comp) && $comp->course_completed == 1)?$comp->course_completed:false;
        } else {
            $enroll = false;
            $complete = false;
        }

        $courses = Course::with('sections.videos')->findOrFail($course->id);
        return view('Front.course.coursedetails',compact('courses','enroll', 'complete'));
    }

         public function enroll(Course $course)
        {
            if (Auth::guest()) {
                return redirect(route('login'));
            }
            //add enroll request to admin dashboard
            $enrollment = Enrollment::create([
                'user_id' => Auth::id(),
                'course_id' => $course->id,
                'status' => 0,
            ]);
            $enrollment->save();
            Session::flash('success_course', 'لقد تلقينا طلبك بنجاح لرغبتك بدراسة الكورس سنقوم ب مراجعة الطلب والموافقه عليه  !');
            return redirect()->back();

        }

            public function complete(Course $course)
            {
                UserCourse::where('user_id', '=', Auth::id())
                            ->where('course_id', '=', $course->id)
                            ->update(['course_completed' => 1]);
                \Session::flash('flash_message', 'Course marked as completed!');
                return redirect(route('course.show', [$course->id]));
            }

        public function getAllCoursesInHome()
        {
            $allCourses = Course::latest()->paginate(4);
            $allArticles = Artical::latest()->paginate(4);
            $categories = Category::all();


            return view('Front.course.homelms',compact('allCourses','allArticles','categories'));
        }
}
