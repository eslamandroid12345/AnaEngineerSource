<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Magazine;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Video;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class CourseController extends Controller
{

    //this function use to render paga index courses
    public function index()
    {
        $courses = Course::paginate(10);;
        return view('Dashbord.Courses.index', compact('courses'));
    }
    //this function use to render paga create course
    public function create()
    {
        return view('Dashbord.Courses.create');

    }

    //this function use to create course
    public function store(Request $request)
    {

        // هنا انا سايب فالديشن
        if ($image = $request->file('photo')) {

            $destinationPath = 'courses/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            $request['photo'] = "$fileName";
        }

        $course = new Course;
        $course->name = $request->name;
        $course->slug = Str::Slug($request->slug);
        $course->description = $request->description;
        $course->photo = $fileName;
        $course->price_online = $request->price_meeting;
        $course->payment_link_online = $request->payment_link_online;
        $course->price_offline = $request->price_incenter;
        $course->payment_link_offline = $request->payment_link_offline;
        $course->price = $request->price_record;
        $course->min_description = $request->min_description;
        $course->user_id = Auth::id();
        $course->payment_link_price = $request->payment_link_price;

        $course->save();

        if ($course)
        {
            session()->flash('Add', 'تم اضافة الدوره بنجاح ');
            return redirect()->route('course.index');
        }
        return redirect()->back();

    }

// this function use to reder page show course

    public function show($id)
    {
        $course = Course::find($id);
        $sections = $course->sections;
        return view('-', compact('course', 'sections'));
    }
// this function use to render page  edit (Dashbord) course

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('Dashbord.Courses.edit', compact('course'));
    }
// this function use to  edit course

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        if ($image = $request->file('photo')) {

            $destinationPath = 'courses/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            $request['photo'] = "$fileName";
            if(file_exists(public_path('courses/' . $course->photo))){
                unlink(public_path('courses/') . $course->photo);
            }
        }
        $course->name = $request->name;
        $course->slug = Str::Slug($request->slug);
        $course->photo = $request->file('photo') != null ? $fileName : $course->photo;
        $course->description = $request->description;
        $course->min_description = $request->min_description;
        $course->price_online = $request->price_meeting;
        $course->payment_link_online = $request->payment_link_online;
        $course->price_offline = $request->price_incenter;
        $course->payment_link_offline = $request->payment_link_offline;
        $course->price = $request->price_record;
        $course->payment_link_price = $request->payment_link_price;
        $course->save();
        if ($course)
        {
            session()->flash('edit', 'تم تعديل الدوره بنجاح ');
            return redirect()->route('course.index');
        }
        return redirect()->back();
    }
    // this function use to  delete course

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        session()->flash('delete', 'تم حذف الدوره بنجاح ');
        return redirect()->route('course.index');
    }




    //this function use to protect pay (if user not payed and not enrollment (locked video used this))

   public function section($id)
    {
        $course = Course::find($id);
        $user = auth()->user();
       if (!$user->subscribedToPlan($course->plan_id, 'main')) {
            return redirect()->route('courses.index')->with('error', 'You need to subscribe to this course first');
       }
        $sections = $course->sections;
        return view('courses.sections', compact('course', 'sections'));
    }


    public function postStar (Request $request, Post $post) {
        $rating = new Rating;
        $rating->user_id = Auth::id();
        $rating->rating = $request->input('star');
        $post->ratings()->save($rating);
        return redirect()->back();
  }



}
