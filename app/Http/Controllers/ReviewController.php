<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required',
            'value' => 'required|integer|between:1,5',
            'course_id' => 'required|exists:courses,id'
        ]);

        $review = new Review;
 
        $review->body = $request->input('body');
        $review->user_id = Auth::id();
        $review->course_id = $request->input('course_id');
        $review->value = $request->input('value');
        $review->save();
        return redirect()->back();
    }


    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
    
        return redirect()->back();
    }
}
