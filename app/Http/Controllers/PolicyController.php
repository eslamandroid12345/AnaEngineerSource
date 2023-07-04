<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index()
    {
        $policies = Policy::all();
        return view('Dashbord.policies.index',compact('policies'));
    }

    public function create()
    {
        return view('Dashbord.policies.create');
    }
    public function store(Request $request)
    {
        $policy = new Policy();
        $policy->content = $request->description;
        $policy->name = $request->name;
        $policy->save();
        return redirect()->route('policy.index');

    }
    public function edit($id)
    {
        $policy = Policy::FindorFail($id);
        return view('Dashbord.policies.edit',compact('policy'));
    }
    public function update(Request $request,$id)
    {
        $policy = Policy::FindorFail($id);
        $policy->content = $request->description;
        $policy->name = $request->name;
        $policy->save();
        return redirect()->route('policy.index');
    }
    public function destroy($id)
    {
        $policy = Policy::FindorFail($id);
        $policy->delete();

        return redirect()->route('policy.index');
    }


}
