<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategorieController extends Controller
{

    public function index()
        {
            $category =Category::get();
            return view ('Dashbord.Categorie.parts', compact('category'));
        }

    public function create()
        {
            return view('Dashbord.Categorie.add_part');
        }


    public function store(Request $request)
        {

           $category = new Category();
            $category->name = $request->name;
            $category->save();
            if ($category)
            {
                session()->flash('Add', 'تم اضافة القسم بنجاح ');
                return redirect()->route('parts.index');
            }
            return redirect()->back();
        }

        public function show()
        {

        }

    public function edit($id)
        {
            $category= Category::findOrFail($id);
            return view ('Dashbord.Categorie.edit', compact('category'));
        }

    public function update(Request $request , $id)
        {
            $request->validate([
                    'name'=>'required|string|max:100',
                ]);
            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->save();
        if ($category)
        {
            session()->flash('edit', 'تم تعديل القسم بنجاح ');
            return redirect()->route('parts.index');
        }
        return redirect()->back();
        }

    public function destroy($id)
        {
            $category = Category::findOrFail($id);
            $category->delete();
            session()->flash('delete', 'تم حذف القسم بنجاح ');

            return redirect()->route('parts.index');
        }

}
