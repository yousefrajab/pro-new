<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site1controller extends Controller
{
    public function index()
    {
        $title = 'first website';
        $desc = 'This is my fisrt website';
        $about_f = 'Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.';
        $about_l = 'You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!';
        $file = 'free download';

        $portfolios = [
            [
                'title' => 'LOG CABIN',
                'image' => 'cabin.png',
                'text' => 'lorem 1',
            ],

            [
                'title' => 'TASTY CAKE',
                'image' => 'cake.png',
                'text' => 'Lorem 2 ',
            ],

            [
                'title' => 'CIRCUS TENT',
                'image' => 'circus.png',
                'text' => 'Lorem 3',
            ],

            [
                'title' => 'CONTROLLER',
                'image' => 'game.png',
                'text' => 'Lorem 4',
            ],

            [
                'title' => 'LOCKED SAFE',
                'image' => 'safe.png',
                'text' => 'Lorem 5',
            ],

            [
                'title' => 'SUBMARINE',
                'image' => 'submarine.png',
                'text' => 'Lorem 6',
            ],

        ];

        $data=[
            ['ahm','ahm@gmail.com','123456789'],
            ['moh','moh@gmail.com','494544444'],
            ['kha','kha@gmail.com','788544455'],
            ['you','you@gmail.com','455554555'],
            ['jou','jou@gmail.com','445545555'],
        ];


        return view('site1.index', compact('title', 'desc', 'about_f', 'about_l', 'file','portfolios','data'));
    }
}
