<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customercontroller extends Controller
{

    public function index()
    {
        return 'index page';
    }

    public function profile($id)
    {
        return 'profile page' . $id;
    }
}
