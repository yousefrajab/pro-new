<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site3controller extends Controller
{
    public function index()
    {
        return view('site3.index');
    }

    public function experience()
    {
        return view('site3.experience');
    }

    public function education()
    {
        return view('site3.education');
    }

    public function skills()
    {
        return view('site3.skills');
    }

    public function interests()
    {
        return view('site3.interests');
    }

    public function awards()
    {
        $CERTIFICATIONS = [
            'CERTIFICATE1',
            'CERTIFICATE2',
            'CERTIFICATE3',
            'CERTIFICATE4',
            'CERTIFICATE5',
            'CERTIFICATE6',

        ];
        return view('site3.awards' , compact('CERTIFICATIONS'));
    }
}
