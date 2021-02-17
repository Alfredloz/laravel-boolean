<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexPage()
    {
        return view('welcome');
    }
    public function aboutPAge()
    {
        return view('about');
    }
    public function infoPage()
    {
        return view('info');
    }
}
