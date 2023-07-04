<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index()
    {
        $terms = Term::all();
        return view('Dashbord.Terms.index',compact('terms'));
    }

    public function create()
    {
        return view('Dashbord.Terms.create');
    }
    public function store(Request $request)
    {
        $term = new Term();
        $term->content = $request->description;
        $term->save();
        return redirect()->route('terms.index');

    }
    public function edit($id)
    {
        $term = Term::FindorFail($id);
        return view('Dashbord.Terms.edit',compact('term'));
    }
    public function update(Request $request,$id)
    {
        $term = Term::FindorFail($id);
        $term->content = $request->description;
        $term->save();
        return redirect()->route('terms.index');
    }
    public function destroy($id)
    {
        $term = Term::FindorFail($id);
        $term->delete();

        return redirect()->route('terms.index');
    }




}
