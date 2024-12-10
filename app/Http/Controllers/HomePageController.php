<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function getCreateNewsPage()
    {
        return view('create-news-page');
    }
}
