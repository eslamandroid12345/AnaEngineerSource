<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $videos = Video::all();
       return view('Dashbord.Courses.Videos.index',compact('videos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();

        return view('Dashbord.Courses.Videos.create',compact('sections'));
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
            'videos.*' => 'required|mimetypes:video/mp4,video/x-m4v,video/mov|max:20000',
        ]);

        $videos = $request->file('videos');

            foreach ($videos as $video) {

                $destinationPath = 'videos/';
                $fileName = date('YmdHis') . "." .  $video->getClientOriginalExtension();
                $video->move($destinationPath, $fileName);
                $request['videos'] = "$fileName";
                $video = new video();
                $video->name = $request->name;
                $video->url = $fileName;
                $check = Section::findOrFail($request->section);
                if ($check) {
                    $video->section_id = $request->section;
                }
                $video->save();

            }

        if ($video)
        {
            session()->flash('Add', 'تم اضافة الفيديو بنجاح ');
            return redirect()->route('video.index');
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
        $video = Video::findOrFail($id);
        $sections = Section::all();
        return view('Dashbord.Courses.Videos.edit',compact('video','sections'));
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
            'videos.*' => 'required|mimetypes:video/mp4,video/x-m4v,video/mov|max:20000',
        ]);

        $videos = $request->file('videos');

        foreach ($videos as $video) {
            $path = $video->store('public/videos');
            $video = Video::findOrFail($id);
            $video->name = $request->name;
            $video->url = $path;
            $check = Section::findOrFail($request->section);
            if($check){
                $video->section_id = $request->section;
            }
            $video->save();
        }
        if ($video)
        {
            session()->flash('edit', 'تم تعديل الفيديو بنجاح ');
            return redirect()->route('video.index');
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
        $video = Video::findOrFail($id);
        $video->delete();
        if ($video)
        {
            session()->flash('delete', 'تم حذف الفيديو بنجاح ');
            return redirect()->route('video.index');
        }
        return redirect()->back();
    }
}
