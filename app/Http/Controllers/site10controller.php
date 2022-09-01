<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site10controller extends Controller
{

    public function index()
    {
        return view('site10.index');
    }


    public function quote()
    {
        return view('site10.quote');
    }


    public function Appfeatures()
    {
        return view('site10.Appfeatures');
    }


    public function Basicfeatures()
    {
        return view('site10.Basicfeatures');
    }

    public function download()
    {
        return view('site10.download');
    }
}
