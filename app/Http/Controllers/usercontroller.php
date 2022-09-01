<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{

    public function indexx()
    {
        $name='yousef';
        $text='hi hbs';
        // return view('index')->with('name',$name)->with('text',$text);
        return view('index' , compact('name','text'));
    }

    public function profile()
    {
        return 'profile page';
    }
}
