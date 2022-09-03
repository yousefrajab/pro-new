<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

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
        if (request()->has('search')) {
            $posts = post::where('title', 'like', '%' . request()->search . '%')->orderby('id', 'desc')->paginate(10);
        } else {
            // $posts = post::orderby('id' , 'desc')->paginate(10);
            $posts = post::orderbyDesc('id')->paginate(10);
        }


        return view('posts.index', compact('posts'));
    }
    public function show($id)
    {
        // $post = post::findOrFail($id);X
        $post = post::find($id);
        //  if(!$post){
        //     abort(404);
        //  }
        if (!$post) {
            return redirect()->route('posts.index');
        }


        dd($post->title);
    }

    public function destroy($id)
    {
        post::destroy($id);
        return redirect()->route('posts.index')->with('msg', 'post deleted successfully');

        //return redirect()->route('posts.index'); = بدل ماانت موجود بهاد الرابط ارجع للصفحة الرئيسية


        //return redirect()->back('posts.index'); = الصفحة الي كنت فيها ارجعلها



        // الفرق بين الديليت و الترانكيت
        // الديليت = بمسح العناصر وبخلي الايدي لعند اخر قيمة وصلت لعندها
        // الترانكيت = بحذف العناصر وبرحع الايدي للاول
    }

    public function trash()
    {
        $posts = post::onlyTrashed()->orderbyDesc('id')->get();
        return view('posts.trash', compact('posts'));

        //onlyTrashed() = البيانات المحذوفة فقط
        //onlyTrashed() = الكل المحذوف والي مو محذوف
    }

    public function restore($id)
    {
        post::onlyTrashed()->find($id)->restore();
        return redirect()->back()->with('msg', 'post restore successfully');
    }

    public function forcedelete($id)
    {
        post::onlyTrashed()->find($id)->forcedelete();
        return redirect()->back();
    }

    public function restore_all()
    {
        post::onlyTrashed()->restore();
        return redirect()->back();
    }

    public function delete_all()
    {
        post::onlyTrashed()->forcedelete();
        return redirect()->back();
    }

    public function create()
    {
        $post = new post();
        return view('posts.create' , compact('post'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg',
            'content' => 'required',

        ]);

        // validate طرق استخدام ال
        //1- request validation
        //2- validator class
        //3- request form file


        //2-      Validator::make($request->all(),[
        //     'title'=>'required',
        //     'image'=>'required|image|mimes:png,jpg,jpeg,svg',
        //     'content'=>'required',

        // ])->validate();
        // OR
        // $dd =  Validator::make($request->all(), [
        //     'title' => 'required',
        //     'image' => 'required|image|mimes:png,jpg,jpeg,svg',
        //     'content' => 'required',

        // ]);
        // if ($dd->fails()) {
        //     return 'Errror';
        // }
        // dd($request->all());

        //  uploads files
        $img = $request->file('image');
        $img_name = time() . rand() . $img->getClientOriginalName();
        $img->move(public_path('uploads/posts'), $img_name);

        post::create([
            'title' => $request->title,
            'image' => $img_name,
            'content' => $request->content,

        ]);
        // Redirect the user
        return redirect()->back()->with('msg', 'post created successfully');
    }


    public function edit($id)
    {
        $post = post::find($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg',
            'content' => 'required',

        ]);

        $post = post::find($id);

        //  uploads files

        $img_name = $post->image;
        if ($request->hasFile('image')) {

            File::delete(public_path('uploads/posts/'.$img_name));
            $img = $request->file('image');
            $img_name = time() . rand() . $img->getClientOriginalName();
            $img->move(public_path('uploads/posts'), $img_name);
        }

        $post->update([
            'title' => $request->title,
            'image' => $img_name,
            'content' => $request->content,

        ]);
        // Redirect the user
        return redirect()->back()->with('msg', 'post created successfully');
    }
}
