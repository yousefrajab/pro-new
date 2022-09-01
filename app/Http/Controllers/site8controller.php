<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site8controller extends Controller
{
    public function index()
    {
        return view('site8.index');
    }

    public function about()
    {
        return view('site8.about');
    }

    public function services()
    {
        return view('site8.services');
    }
    public function callout()
    {
        return view('site8.callout');
    }

    public function portfolio()
    {
        return view('site8.portfolio');
    }

    public function contact()
    {
        return view('site8.contact');
    }

}
