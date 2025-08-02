<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all blog posts
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * @param \App\Http\Requests\BlogRequest|\Illuminate\Http\Request $request
     */
    public function store(BlogRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/blogs', 'public');
            $validated['image'] = $path;
        }

        // Create the blog post
        Blog::create($validated);
        return redirect()->route('admin-blog-page')->with('success', 'Blog post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the blog post by ID
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'blog_heading' => 'required|string|max:255',
            'blog_date' => 'required|date',
            'image' => 'required|image|max:2048|dimensions:width=550,height=550',
            'content' => 'required|string',
        ]);
        // Find the blog post by ID
        $blog = Blog::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $path = $request->file('image')->store('uploads/blogs', 'public');
            $validated['image'] = $path;
        }
        // Update the blog post
        $blog->update($validated);
        return redirect()->route('admin-blog-page')->with('success', 'Blog post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the blog post by ID
        $blog = Blog::findOrFail($id);

        // Delete the blog post
        $blog->delete();

        return redirect()->route('admin-blog-page')->with('success', 'Blog post deleted successfully.');
    }
}
