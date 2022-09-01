<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{

    public function home()
    {
        return 'home page';
    }

    public function orders()
    {
        return 'orders page';
    }

    public function products()
    {
        return 'products page';
    }
}
