<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site4controller extends Controller
{
    public function index()
    {
        return view('site4.index');
    }

    public function services()
    {
        return view('site4.services');
    }

    public function portfolio()
    {
        $portfolios = [

            [
                'title' => 'PROJECT NAME',
                'image' => '1.jpg',
                'text' => 'lorem 1',
                'client'=>'Threads',
                'Category'=>'Illustration',
            ],
            [
                'title' => 'PROJECT NAME',
                'image' => '2.jpg',
                'text' => 'lorem 2',
                'client'=>'Explore',
                'Category'=>'Graphic Design',
            ],
            [
                'title' => 'PROJECT NAME',
                'image' => '3.jpg',
                'text' => 'lorem 3',
                'client'=>'Finish',
                'Category'=>'Identity',
            ],
            [
                'title' => 'PROJECT NAME',
                'image' => '4.jpg',
                'text' => 'lorem 4',
                'client'=>'Lines',
                'Category'=>'Branding',
            ],
            [
                'title' => 'PROJECT NAME',
                'image' => '5.jpg',
                'text' => 'lorem 5',
                'client'=>'Southwest',
                'Category'=>'Website Design',
            ],
            [
                'title' => 'PROJECT NAME',
                'image' => '6.jpg',
                'text' => 'lorem 6',
                'client'=>'Window',
                'Category'=>'Photography',
            ]

        ];
        return view('site4.portfolio' ,compact('portfolios'));
    }

    public function about()
    {
        return view('site4.about');
    }

    public function team()
    {
        return view('site4.team');
    }

    public function contact()
    {
        return view('site4.contact');
    }
}
