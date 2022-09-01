<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsmail;
use App\Mail\testmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailcontroller extends Controller
{
    public function send()
    {
        Mail::to('admin@gmail.com')->send(new testmail());
        //to() لمين يرسل الرسالة
        //send() محتوى الرسالة
        //mailable وظيفته يرسل الفيو المناسب
        //ويرسل البيانات لو في
        return 'done';
    }
    //http عبارة عن بروتوكول وظيفته يشغل صفحات الانترنت يشغل وظيفة ما
    //ftp بروتوكول رفع ملفات على الواتس اب file transfer proticol
    // SMTP بروتوكول خاص بالايميلات simple mail transfer proticol
    public function contact_us()
    {
        return view('forms.contact_us');
    }

    public function contact_us_data(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
            'cv'=>'required'

        ]);

         $data = $request->except('_token');

         $cv_new_name =rand().time(). $request->file('cv')->getClientOriginalName();
        $request->file('cv')->move(public_path('uploads') , $cv_new_name);
        $data['cv'] = $cv_new_name;
        //لاضافة عنصر جديد للمصفوفة
        mail::to('khaldon.r.n.n@gmail.com')->send(new ContactUsmail($data));
        //contactusmail بعتت البيانات على صفحة

        //  return back()->with('message_sent' , 'Your message has been sucssefuly');
         return 'Your message has been sucssefuly';
        // dd($request->except('_token'));
        //$request->except('_token'); بجيب البيانات كلهن ما عدا التوكن

    }
}
