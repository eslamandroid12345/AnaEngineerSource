<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())
            ->where('is_admin', 0)
            ->paginate(10);
        return view('Dashbord.Users.index',compact('users'));
    }

    public function create()
    {
        return view('Dashbord.Users.create');
    }

    public function store(Request $request)
    {

        // validate the request data

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
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
        $user->is_admin = $request->is_admin;
        $user->save();
        if ($user)
        {
            session()->flash('Add', 'تم اضافة المستخدم بنجاح ');
            return redirect()->route('users.index');
        }
        return redirect()->back();
    }

    public function show()
    {

    }
    public function edit($id)
    {
        $user = User::findorfail($id);

        return view('Dashbord.Users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = "123456";

        $user->is_admin = $request->is_admin;
        $user->save();
        if ($user->is_admin === '0')
        {
            session()->flash('edit', 'تم تعديل الي المستخدم بنجاح ');
            return redirect()->route('users.index');
        }
        session()->flash('edit', 'تم تعديل الي مدير بنجاح ');
        return redirect()->route('users.moderator');
    }

    public function destroy($id)
    {
        $users = User::findorfail($id);
        $users->delete();
        return redirect()->route('users.index')->withStatus('admin deleted successfully');
    }

    public function moderator()
    {
        $users = User::where('id', '!=', Auth::id())
            ->where('is_admin', 2)
            ->paginate(10);
        return view('Dashbord.Users.moderator', compact('users'));
    }
}
