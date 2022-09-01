<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class numcontroller extends Controller
{


    public function index()
    {
        return view('index');
    }


    public function about()
    {
        return 'about';
    }


    public function contact()
    {
        return view('contact');
    }


    public function user($id)
    {
        return 'user ' . $id;
    }
}
