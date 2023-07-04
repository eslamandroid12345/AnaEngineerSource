<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Storage;


class AuthController extends Controller
{

    public function register()
    {
        return view('Auth.register');
    }

    public function handleRegister(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|string|max:50|min:8',
            'image'=>'nullable|image|mimes:jpg,jpeg,png',
            'profile_cover'=>'image|mimes:jpg,jpeg,png',
            'phone' => 'nullable',

        ],
            [
                'name.regex' => 'تاكد من كتابه الاسم بشكل صحيح',
                'password.max' => 'يجب أن تحتوي كلمة المرور ع الاقل 8 حروف',
                'email'=>'تنسيق البريد الإلكتروني غير صالح.',
                'password' =>'يجب أن تتكون كلمة المرور من 8 أحرف على الأقل.',
                'email' =>'هذا الايميل موجود من قبل',

            ]);


        if ($image = $request->file('image')) {

            $destinationPath = 'profile_photo/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            $request['image'] = "$fileName";
        }

        if ($profile_cover = $request->file('profile_cover')) {

            $destinationPathProfile_cover = 'cover_photo/';
            $fileNameProfileCover = date('YmdHis') . "." . $profile_cover->getClientOriginalExtension();
            $profile_cover->move($destinationPathProfile_cover, $fileNameProfileCover);
            $request['profile_cover'] = "$fileNameProfileCover";
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image'=> $fileName ?? null,
            'profile_cover'=> $fileNameProfileCover ?? null,
            'phone'=>$request->phone,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect(url('/'));



    }


    public function login()
    {
        return view('Auth.login');
    }


    public function edit($id)
    {

        $user = User::findOrFail($id);
        return view('Front.Socialmedia.edituser', compact('user'));
    }


    public function handeledit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return back();
    }


    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:100',
            'password' => 'required|string|max:50|min:8'
        ]);
        $is_login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if (!$is_login) {

            Session::flash('error','Error to login please check email or password');
            return back();
        }
        return redirect(url('/'));
    }


    public function logout()
    {
        auth::logout();
        return back();
    }

    public function reset_passowrd(Request $request)
    {
        $request->validate([
            'password' => 'required|string|max:50|min:8'
        ]);
        $is_login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if (!$is_login) {
            return back();
        }
        return redirect()->route('render_create_profile');
    }


//    public function redirectToGoogle()
//
//    {
//        return Socialite::driver('google')->redirect();
//    }
//
//    public function handleGoogleCallback()
//
//    {
//
//        $user = Socialite::driver('google')->user();
//        $localUser = User::where('email', $user->email)->first();
//        if (!$localUser) {
//            $localUser = User::create([
//                'name' => $user->name,
//                'email' => $user->email,
//                'google_id' => $user->id,
//                'password' => Hash::make(Str::random(40)),
//            ]);
//        }
//        Auth::login($localUser);
//        return redirect('/');
//    }

    public function redirectToFacebook()

    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()

    {

        $user = Socialite::driver('facebook')->stateless()->user();

        $data = [
            'name' => $user->getName(),
            'first_name' => $user->getName(),
            'email' => $user->getEmail()
        ];



        dd($data);

        $localUser = User::where('email',$user->email)->first();
        if (!$localUser) {
            $localUser = User::create([
                'name' => $user->getName(),
                'email' => $user->email,
                'facebook_id' => $user->getId(),
                'password' => Hash::make(Str::random(40)),
            ]);
        }

        Auth::login($localUser);
        return redirect('/');
    }




}
