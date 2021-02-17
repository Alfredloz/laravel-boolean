<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexPage()
    {
        return view('welcome');
    }
    public function blogPAge()
    {
        return view('blog');
    }
    public function infoPage()
    {
        return view('info');
    }
}
