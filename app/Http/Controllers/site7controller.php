<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site7controller extends Controller
{
    public function index()
    {
        return view('site7.index');
    }

    public function icons()
    {
        return view('site7.icons');
    }

    public function image()
    {
        return view('site7.image');
    }

    public function testimonials()
    {
        return view('site7.testimonials');
    }

    public function call()
    {
        return view('site7.call');
    }

}
