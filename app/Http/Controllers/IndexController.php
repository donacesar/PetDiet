<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        return view('index', compact('posts'));
    }
}
