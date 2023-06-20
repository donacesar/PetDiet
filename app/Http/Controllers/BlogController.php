<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function adminIndex()
    {
        $posts = Blog::all();
        return view('admin.blog', compact('posts'));
    }

    public function form()
    {
        return view('admin.blog_form');
    }

    public function create(Request $request)
    {
        $request['image_url'] = $request->file('image')->store('uploads', 'public');
        Blog::create($request->except(['image']));
        return redirect()->route('admin_blog.index');
    }

    public function delete(Blog $blog)
    {

        Storage::disk('public')->delete($blog->image_url);
        $blog->delete();
        return redirect()->back();
    }

}
