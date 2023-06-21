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

    public function index()
    {
        $posts = Blog::all();
        return view('blog', compact('posts'));
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

    public function delete(Blog $post)
    {
        Storage::disk('public')->delete($post->image_url);
        $post->delete();
        return redirect()->back();
    }

    public function edit(Blog $post)
    {
        return view('admin.blog_edit', compact('post'));
    }

    public function update(Request $request, Blog $post)
    {
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($post->image_url);

            $request['image_url'] = $request->file('image')->store('uploads', 'public');
            $post->update($request->except(['image']));
        } else {
            $post->update($request->all());
        }

        return redirect()->route('admin_blog.index');
    }

    public function show(Blog $post)
    {
        return view('post_show', compact('post'));
    }
}
