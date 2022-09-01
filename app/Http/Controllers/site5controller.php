<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site5controller extends Controller
{
    public function index()
    {
        return view('site5.index');
    }

    public function about()
    {
        return view('site5.about');
    }

    public function services()
    {
        return view('site5.services');
    }

    public function portfolio()
    {
        $portfolios = [
            [
                'title' => 'Project Name',
                'image' => '1.jpg',
                'text' => 'Category',
            ],

            [
                'title' => 'Project Name',
                'image' => '2.jpg',
                'text' => 'Category ',
            ],

            [
                'title' => 'Project Name',
                'image' => '3.jpg',
                'text' => 'Category',
            ],

            [
                'title' => 'Project Name',
                'image' => '4.jpg',
                'text' => 'Category',
            ],

            [
                'title' => 'Project Name',
                'image' => '5.jpg',
                'text' => 'Category',
            ],

            [
                'title' => 'Project Name',
                'image' => '6.jpg',
                'text' => 'Category',
            ],

        ];

        return view('site5.portfolio' , compact('portfolios'));
    }

    public function contact()
    {
        return view('site5.contact');
    }

}
