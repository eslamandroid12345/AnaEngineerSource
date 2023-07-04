<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use APP\Http\AuthController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use function Sodium\compare;


class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }





    public function edit()
        {

            $profile= Auth::user();
            return view ('Front.Socialmedia.editprofile', compact('profile'));
        }


    public function update_profile(Request $request)
        {


//            return $request;
            $request->validate([
                'image'=>'nullable|image|mimes:jpg,jpeg,png',
                'profile_cover'=>'nullable|image|mimes:jpg,jpeg,png',
                'facebook' => 'nullable|string',
                'twitter' => 'nullable|string',
                'linkedin' => 'nullable|string',
                'phone' => 'nullable|string',
                'city' => 'nullable|string',
                'job' => 'nullable|string',
                'user_id'=> 'nullable',

            ]);
            $profile =  Auth::user();

        if ($image = $request->file('image')) {
            $destinationPath = 'profile_photo/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            $request['image'] = "$fileName";
            $oldImagePath = public_path('profile_photo/') . $profile->image;
            if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        if ($profile_cover = $request->file('profile_cover')) {
            $destinationPathProfile_cover = 'cover_photo/';
            $fileNameProfileCover = date('YmdHis') . "." . $profile_cover->getClientOriginalExtension();
            $profile_cover->move($destinationPathProfile_cover, $fileNameProfileCover);
            $request['profile_cover'] = "$fileNameProfileCover";
            $oldCoverPath = public_path('cover_photo/') . $profile->profile_cover;
            if (file_exists($oldCoverPath) && is_file($oldCoverPath)) {
                unlink($oldCoverPath);
            }
        }


        $profile->update([
                'facebook' =>$request->facebook,
                'twitter' =>$request->twitter,
                'linkedin'=>$request->linkedin,
                'phone'=>$request->phone,
                'city' =>$request->city,
                'job' =>$request->job,
                'image' => $fileName ?? $profile->image,
                'profile_cover' => $fileNameProfileCover ?? $profile->profile_cover,
                'user_id'=> Auth::id(),
            ]);


            return Redirect::back();

        }

    public function editSecurity($id)
    {

        $profile= User::findOrFail($id);
        return view ('Front.Socialmedia.editsecurity', compact('profile'));
    }






    public function profile($id)
        {
            $profile = profile::find($id);
            return view ('Front.socialmedia.profile', compact ('profile', 'id'));
        }

    public function user()
        {
            $user = User::all();
            return view('users.show', compact('user'));

        }

    public function follow($id)
    {
        $user = User::find($id);
        auth()->user()->following()->attach($user);
        return back();
    }

    public function unfollow($id)
    {
        $user = User::find($id);
        auth()->user()->following()->detach($user);
        return back();
    }

//    public function getPosts($id)
//    {
//        $posts = Post::where('user_id', Auth::user()->id)->get();
//        return view('Front.socialmedia.profile',compact('posts','id'));
//
//    }







}
