<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site9controller extends Controller
{
    public function index()
    {
        return view('site9.index');
    }

    public function about()
    {
        return view('site9.about');
    }

    public function products()
    {
        return view('site9.products');
    }

    public function store()
    {
        return view('site9.store');
    }

}
