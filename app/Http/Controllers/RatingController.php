<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;


class RatingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'value' => 'required|integer|between:1,5',
            'course_id' => 'required|exists:courses,id'
        ]);

        $review = new Review;
        $review->title = $request->input('title');
        $review->body = $request->input('body');
        $review->user_id = Auth::id();
        $review->course_id = $request->input('course_id');
        $review->value = $request->input('value');
        $review->save();

        return redirect()->back();
    }


public function destroy($id)
{
    $rating = Review::findOrFail($id);
    $rating->delete();

    return redirect()->back();
}
}
