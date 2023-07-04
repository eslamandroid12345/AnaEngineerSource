<?php

namespace App\Http\Controllers;
use App\Models\Artical;
use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MagazineController extends Controller{


    public  function all_admin_magazine()
        {
            $magazine = Magazine::paginate(10);
            return view('Dashbord.Magazine.magazine', compact('magazine'));
        }

    public  function admin_magazine()
        {
            $magazine = Magazine::all();
            return view('Dashbord.Magazine.create_magazine', compact('magazine'));
        }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png',
            'link' => 'required|string',
        ]);
        if ($image = $request->file('photo')) {

            $destinationPath = public_path('magazine');
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            $request['photo'] = "$fileName";
        }

        $magazine = new Magazine();
        $magazine->title = $request->title;
        $magazine->description = $request->description;
        $magazine->photo = $fileName;
        $magazine->slug = Str::Slug($request->slug);
        $magazine->link = $request->link;

        $magazine->min_description = $request->min_description;

        $magazine->save();
        if ($magazine)
        {
            session()->flash('Add', 'تم اضافة المجله بنجاح ');
            return redirect()->route('all_admin_magazine');
        }
        return redirect()->back();


    }

    public function edit_page($id)
        {
            $magazine= Magazine::findOrFail($id);
            return view ('Dashbord.Magazine.edit_magazine', compact('magazine' , 'magazine'));
        }


    public function edit_magazen(Request $request , $id){
            $request->validate([
                'title' => 'string',
                'description',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png',
                'link' => 'string',

            ]);

            $magazine = Magazine::findOrFail($id);
            if ($image = $request->file('photo')) {

                $destinationPath = public_path('magazine');
                $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $fileName);
                $request['photo'] = "$fileName";
                if(file_exists(public_path('magazine/' .$magazine->photo))){
                    unlink(public_path('magazine/') .$magazine->photo);
                }
            }

            $magazine->photo = $request->file('photo') != null ? $fileName : $magazine->photo;
            $magazine->title = $request->title;
            $magazine->slug = Str::Slug($request->slug);
            $magazine->description = $request->description;
            $magazine->link = $request->link;

            $magazine->save();
            if ($magazine)
            {
                session()->flash('edit', 'تم تعديل المجله بنجاح ');
                return redirect(route('all_admin_magazine'));
            }
            return redirect()->back();
        }

    public function delete($id){
        $magazine = Magazine::findOrFail($id);
        $magazine->delete();
        session()->flash('delete', 'تم حذف المجله بنجاح ');
        return back();
    }

    //Front
    public function view_all_magazine(Request $request)
    {
        if($request->search){

            $search = preg_replace("/^<p.*?>/", "",$request->search);
            $magazines = Magazine::query()
                ->where('title', 'like', '%'. $search .'%')
                ->orWhere('min_description','like', '%'. $search .'%')
                ->orWhere('description','like', '%' . $search .'%')
                ->paginate(8);
        }else{
            $magazines = Magazine::latest()->paginate(8);
        }
        $lastMagazines = Magazine::latest()->take(3)->get();
        $categories = Category::all();
        return view ('Front.magazine.magazine', compact('magazines','lastMagazines','categories'));
    }

    public function show($slug)
    {
        $magazine= Magazine::where('slug', $slug)->firstOrFail();
        $previous = Magazine::where('id', '<', $magazine->id)
            ->orderBy('id', 'desc')
            ->first();
        $next = Magazine::where('id', '>', $magazine->id)
            ->orderBy('id', 'asc')
            ->first();
        $lastMagazines = Magazine::latest()->where('slug', $slug)->firstOrFail()->paginate(3);

        $categories = Category::all();

        return view ('Front.magazine.magazine_detiles', compact('magazine','lastMagazines','previous','next','categories'));
    }
}
