<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function index()
    {
        //بجيب البيانات من الداتا بيز
        // $posts = 'SELECT * FROM posts';
        // ملف المايغريتشن الملف المسؤول عن انشاء الجدول
        // ملف المودل الملف المسؤول عن التعامل مع الجدول
        // $posts=post::paginate(10); بيجيب اول عشر عناصر من الداتا
        // $posts = post::all();
        // dd($posts);
        if(request()->has('search')){
            $posts = post::where('title','like', '%' .request()-> search.'%')->orderby('id' , 'desc')->paginate(10);
        }else{
            // $posts = post::orderby('id' , 'desc')->paginate(10);
            $posts = post::orderbyDesc('id' )->paginate(10);
        }


        return view('posts.index' , compact('posts'));
    }
    public function show($id)
    {
        // $post = post::findOrFail($id);X
         $post = post::find($id);
        //  if(!$post){
        //     abort(404);
        //  }
          if(!$post){
            return redirect()->route('posts.index');
        }


        dd($post->title);
    }
}
