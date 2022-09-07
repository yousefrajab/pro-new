<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Insurance;
use App\Models\post;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class Realtioncontroller extends Controller
{
    public function one_to_one()
    {
        // $insurance = Insurance::find(1);

        // $user = User::find(1);
        // dd($user->insurance);
        // $insurance = Insurance::where('user_id',$user->id)->first();
        // dd( $insurance->user);

        $users = User::with('insurance')->get();
        return view('realation.one_to_one' , compact('users'));
    }

    public function one_to_many($id)
    {
       $post = post::find($id);
    //    dd($post->comments);
    $next = post::where('id' , '>' , $post->id)->first();
    $prev = post::where('id' , '<' , $post->id)->orderbydesc('id')->first();
       return view('realation.one_to_many' , compact('post', 'next' , 'prev'));
    }

    public function one_to_many_data(Request $request)
    {
       Comment::create([
        'comment'=>$request->comment,
        'post_id'=>$request->post_id,
        'user_id'=> 1
       ]);
       return redirect()->back();
    }

    public function many_to_many()
    {
        $std = Student::find(2);
        $courses = Course::all();
        return view('realation.many_to_many' , compact('std' , 'courses'));
    }

    public function many_to_many_data(Request $request)
    {
        // dd($request->except('_token'));
        $std = Student::find(2);
        //attach => بتضيف لمرة واحدة
        // $std->courses()->attach($request->course_id);
        //detach=>بتحذف
        // $std->courses()->detach($request->course_id);
        //sync=> العنصر الموجود خليه العنصر الي انحذف احذفو
         $std->courses()->sync($request->course_id);
         return redirect()->back();
    }


}
