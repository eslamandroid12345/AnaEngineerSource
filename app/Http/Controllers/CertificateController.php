<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Certificate;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function allcertificate()
    {
        $certificates = Certificate::paginate(10);
        return view('Dashbord.certificate.allcertificate', compact('certificates'));
    }
    public function addcertficate()
    {
        $users=User::get();
        $courses=Course::get();
        return view('Dashbord.certificate.addcertificate' , compact('users', 'courses'));
    }


    public function uploadCertificate(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
            'file' => 'required|mimes:pdf|max:2048',
        ],
        [
            'user_id' => '  هذا الحقل مطلوب تاكد من اختيار الطالب بشكل صحيح',
            'course_id' => ' هذا الحقل مطلوب تاكد اختيار الكورس بشكل صحيح       ',
            'file'=>'يجب ان يكون امتداد pdf',
        ]);


        if ($image = $request->file('file')) {

            $destinationPath = 'certificates/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            $request['file'] = "$fileName";
        }

        // Create a new certificate instance and set its properties
        $certificate = new Certificate;
        $certificate->user_id = $request->user_id;
        $certificate->course_id = $request->course_id;
        $certificate->file =   $fileName;

    // Save the certificate instance to the database
        $certificate->save();
        if ($certificate)
        {
            session()->flash('Add', 'تم اضافة الشهاده بنجاح ');
            return redirect()->route('allcertificate');
        }
        return redirect()->back();
    // Redirect the user back to the previous page with a success message

    }

    public function userCertificate()
        {
            $userId = auth()->id(); // get the ID of the authenticated user
            $certificates = Certificate::where('user_id', $userId)->get();
            $categories = Category::all();

            return view('Front.certificate.certificate', compact('certificates','categories'));
        }

    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);
        $certificate->delete();
        if ($certificate)
        {
            session()->flash('delete', 'تم حذف الشهاده بنجاح ');
            return redirect()->route('allcertificate');
        }
        return redirect()->back();
    }

}
