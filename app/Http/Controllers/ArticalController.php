<?php

namespace App\Http\Controllers;
use App\Models\Artical;
use App\Models\Category;
use App\Models\Course;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class ArticalController extends Controller
{

    public function index()
    {
        $articles = Artical::paginate(10);
        return view('Dashbord.Artical.artical', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('Dashbord.Artical.add_artical', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
            'img' => 'required|image|mimes:jpg,jpeg,png',
            'tag1' => 'nullable|string|max:200',
            'tag2' => 'nullable|string|max:200',
            'tag3' => 'nullable|string|max:200',
            'min_description'=>'nullable|string|max:250',
//                'category_ids'=> 'required',
//               'category_ids.*'=> 'exists :categories,id'
        ]);



        if ($image = $request->file('img')) {

            $destinationPath = 'articles/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            $request['img'] = "$fileName";
        }

        $article = new Artical();
        $check = Category::findOrFail($request->category);
        if ($check) {
            $article->category_id = $request->category;
        }
        $article->title = $request->title;
        $article->description = $request->description;
        $article->user_id = Auth::user()->id;
        $article->img = $fileName;
        $article->slug = Str::Slug($request->slug);
        $article->tag1 = $request->tag1;
        $article->tag2 = $request->tag2;
        $article->tag3 = $request->tag3;
        $article->min_description = $request->min_description;
        $article->save();
        if ($article)
        {
            session()->flash('Add', 'تم اضافة المقاله بنجاح ');
            return redirect()->route('article.index');
        }
        return redirect()->back();
    }

    public function edit($id)
    {

        $article = Artical::findOrFail($id);
        $categories = Category::all();
        return view('Dashbord.Artical.edit_artical', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
            'tag1' => 'nullable|string|max:200',
            'tag2' => 'nullable|string|max:200',
            'tag3' => 'nullable|string|max:200',
        ]);

        $article = Artical::findOrFail($id);

        $fileName = $article->img; // set the default image to the current article's image

        if ($image = $request->file('img')) {
            $destinationPath = 'articles/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            if(file_exists(public_path('articles/' . $article->img))){
                unlink(public_path('articles/') . $article->img);
            }
        }

        $check = Category::findOrFail($request->category);
        if ($check) {
            $article->category_id = $request->category;
        }

        $article->title = $request->title;
        $article->img = $fileName;
        $article->description = $request->description;
        $article->min_description = $request->min_description;
        $article->slug = Str::Slug($request->slug);
        $article->tag1 = $request->tag1;
        $article->tag2 = $request->tag2;
        $article->tag3 = $request->tag3;
        $article->save();

        if ($article)
        {
            session()->flash('edit', 'تم تعديل المقاله بنجاح ');
            return redirect()->route('article.index');
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $articals = Artical::findOrFail($id);
        $articals->delete();
        if ($articals)
        {
            session()->flash('delete', 'تم حذف المقاله بنجاح ');
            return redirect()->route('article.index');
        }
        return redirect()->back();

    }


}




