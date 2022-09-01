<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site6controller extends Controller
{
    public function index()
    {
        return view('site6.index');
    }

    public function about()
    {
        return view('site6.about');
    }

    public function projects()
    {
        return view('site6.projects');
    }

    public function contact()
    {
        return view('site6.contact');
    }

}
