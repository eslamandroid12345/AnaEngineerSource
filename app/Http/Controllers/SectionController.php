<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use voku\helper\ASCII;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();
        return view('Dashbord.Courses.Sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('Dashbord.Courses.Sections.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $section = new Section;
        $check = Course::findOrFail($request->course);
        if($check){
            $section->course_id = $request->course;
        }
        $section->name = $request->name;

        $section->save();
        if ($section)
        {
            session()->flash('Add', 'تم اضافة القسم بنجاح ');
            return redirect()->route('section.index');
        }
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = Section::findOrFail($id);
        $courses = Course::all();
        return view('Dashbord.Courses.Sections.edit',compact('section','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $section = Section::findOrFail($id);
        $section->name = $request->name;
        $check = Course::findOrFail($request->course);
        if($check){
            $section->course_id = $request->course;
        }
        $section->save();
        if ($section)
        {
            session()->flash('edit', 'تم تعديل القسم بنجاح ');
            return redirect()->route('section.index');
        }
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();
        if ($section)
        {
            session()->flash('delete', 'تم حذف القسم بنجاح ');
            return redirect()->route('section.index');
        }
        return redirect()->back();
    }
}
