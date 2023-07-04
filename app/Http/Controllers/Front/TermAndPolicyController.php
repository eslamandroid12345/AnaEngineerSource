<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class TermAndPolicyController extends Controller
{
    public function showPageTermsAndConditions()
    {
        return view('Front.policy_terms_questions.terms');
    }
    public function showPagePolicy()
    {
        return view('Front.policy_terms_questions.policy');

    }
    public function showPageCommonQuestions()
    {
        return view('Front.policy_terms_questions.common_questions');

    }
    public function showPageAboutus()
    {
        return view('Front.policy_terms_questions.aboutus');

    }
    public function showPageContactUs()
    {
        return view('Front.policy_terms_questions.contact_us');

    }
    public function StoreContactUs(Request $request)
    {
//        $rules =  [
//            'name' => ['required','string','min:3','max:100'],
//            'country' => ['required','max:200'],
//            'phone' => ['required','integer','max:30'],
//            'email' => ['required','email','max:50'],
//            'message' => ['required','not_regex:/([%\$#\*<>]+)/'],
//
//        ];
//
//        $this->validate( $request, $rules );

        $contact = Contact::create([
            "name" => $request->name,
            "country"=>$request->country,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message
        ]);

        if ($contact) {
            return redirect()->route('contact.index')->with('status','تم ارسال رسالتك بنجاح');
        } else {
            return redirect()->route('contact.index')->with('status',"هناك مشكله حاول مجددا");
        }
    }
    public function showOurvisionPage()
    {
        return view('Front.policy_terms_questions.ourvision');

    }
    public function showJobsPage()
    {
        return view('Front.policy_terms_questions.job');

    }

}
