<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PageController extends Controller
{
    public function indexPage()
    {
        return view('welcome');
    }
    public function blogPage()
    {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }
    public function infoPage()
    {
        return view('info');
    }
}
