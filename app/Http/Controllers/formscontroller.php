<?php

namespace App\Http\Controllers;

use App\Rules\CheckWordCount;
use Illuminate\Http\Request;

class formscontroller extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }
    public function form1_data(Request $request)
    // كل دالة جاية من فورم بتاخذ اوبجكت من ريكويست
    {
        /*

                          للتجريب

        //  dd($request->all());
         //من الريكويست الي واصلني اطبع كل البيانات
         //all فقط استخدمها حتى اشوف البيانات
        // dd($request->except('_token'));
        //بعرض كل شي ما عدا
        // dd($request->only(['name' , 'age']));
        //      بعرض فقط حقل الاسم والعمر
     */
        $name = $request->name;
        $age = $request->age;
        return "welcome $name your age is $age ";
    }
    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $Email = $request->Email;
        $Password = $request->Password;
        $Age = $request->Age;
        return view('forms.form2_data', compact('name', 'Email','Password','Age'));
    }
    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Request $request)
    {
        // $name = $request->name;
        // $Email = $request->Email;
        // // return view('forms.form3_data', compact('name', 'Email','Password','Age'));
        // return "welcome $name your age is $Email ";

        $request ->validate([
        'name'=> 'required',
        'Email'=> 'required',
        ]);
        dd($request->all());
    }
    public function form4()
    {
     return view('forms.form4');
    }

    public function form4_data(Request $request)
    {
        $request->validate([
            // 'name'=> 'required | min:3|max:20',
            'name'=> ['required ' , new CheckWordCount(3 , 'ما تكتب اسماء اجدادك')],
            'Email'=> 'required|email|ends_with:gmail.com',
            'Password'=> 'required |confirmed |min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/ ',
            'bio'=> ['required',new CheckWordCount(15 , 'HELOOOOOOOOOO STOP')  ]
            //بدي اعمل عدد الكلمات بعمل فاليديتشن لحالها بستخدم امر ميك رول من ارتيزن
        ]);
        dd($request->all());
    }

    public function form5()
    {
        return view('forms.form5');
    }

    public function form5_data(Request $request)
    {
        $request ->validate(([
        'name'=> 'required',
        'cv'=> 'required',
        ]));

        //  $img_name=$request->file('cv')->getClientOriginalName();
        //$img_name=$request->file('cv')->getClientOriginalName(); دالة بتجيب الاسم الاصلي للصورة او للملف المرفوع
        //  ملاحظة لا ترفع صورة وتخليها باسمها القديم
        $img_name = rand();
        // rand() دالة بتعطي رقم عشوائي
        $ex=$request->file('cv')->getClientOriginalExtension();
        //$ex=$request->file('cv')->getClientOriginalExtension(); بتعطي امتداد

        //time();  الوقت الحالي بالثواني بدا من 1/1/1970

        $img_name = rand() .time().  '.' . $ex;

         //قكرة عمل امتداد صورة فيس بوك
        $alpha=range('a','z');
        //  dd($alpha[rand(0,25)]);
         $img_name = rand() .'_'.rand().rand() .'_'.rand().rand().'_'.$alpha[rand(0,count($alpha) - 1)].'.' . $ex;


        $request->file('cv')->move(public_path('uploads') , $img_name );
        dd($request->all());
        //$request->file('cv')->move(public_path('uploads')); دالة تنقل الصورة من ملف تمب الى مسارها الحقيقي

    }



}
