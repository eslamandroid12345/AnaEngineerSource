<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Artical;
use App\Models\Course;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;


class DashboardController extends Controller
{

// this  is function use to rendere page subscription page

    public function getSubscriptionPage()
    {
        return view('-');
    }

    //this function use to get all user subscription or plan or expiration date

    public function subscriptionDate()
    {
        $user = Auth::user();
        $subscription = $user->subscription('main');
        if ($subscription->ends_at) {
            $expiration_date = $subscription->ends_at;
        } else {
            $expiration_date = "No expiration date";
        }

        // retrieve user data
        $user_data = User::find($user->id);

        return view('dashboard', [
            'expiration_date' => $expiration_date,
            'user_data' => $user_data
        ]);
    }


//----------------------------------------------------------------------------


// this  is function use to rendere page users page

    public function getUserDate()
    {
        return view('-');
    }

    // this  is function use to return user date in Dashbord

    public function userData()
    {
        $user_data = User::select('name', 'job');
        return view('dashboard', [
            'user_data' => $user_data
        ]);
    }

//----------------------------------------------------------------------------



// this  is function use to rendere page add users page


    public function addAdmin()
    {
        return view('-');
    }

//this is function use to create new user (admin)

    public function createAdmin(Request $request)
    {
        // validate the request data

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // if validation fails, return to the add admin page with error messages

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // create a new user with the admin role
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'admin';
        $user->save();
        return redirect()->route('dashboard')->with('success', 'Admin added successfully');
    }


    public function counts()
    {
            $usersCount = User::count();
            $articlesCount = Artical::count();
            $coursesCount = Course::count();
            return view('Dashbord.index', compact('usersCount','articlesCount','coursesCount'));

    }


//----------------------------------------------------------------------------





}
