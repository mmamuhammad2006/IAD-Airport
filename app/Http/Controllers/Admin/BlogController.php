<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;

use App\Models\Metatag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    //    creating blog logic starts here
    public function seeBlog()
    {
        return view('admin.dashboard.createBlog');
    }

    public function storeBlog(Request $request)
    {
        if ($request->img) {
            echo '<pre>';
            print_r($request->img);

            $img = $request->img->hashName();
            $request->img->storeAS('public/uploads', $img);

            Blog::create([
                'title' => $request->title,
                'date' => $request->date,
                'body' => $request->body,
                'img' => $img,
            ]);
        }

        Blog::create([
            'title' => $request->title,
            'date' => $request->date,
            'body' => $request->body,
            'img' => null,
        ]);
        return redirect()->back()->with('success', 'Blogs added successfully');
    }

    //    creating blog logic ends here


    //    resource route blogs list editing updating showing viewing blog logic starts here

    public function index()
    {
        $blogs = Blog::all();
        return view('admin.dashboard.blogsList', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.dashboard.partials.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.dashboard.partials.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'body' => 'required',
        ]);
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->date = $request->date;
        $blog->body = $request->body;
        $blog->save();
        return redirect()->back()->with('success', 'Blogs updated successfully');
    }

    public function destroy($id)
    {
        // dd($id);
        Blog::destroy($id);
        return redirect()->back()->with('success', 'Blogs deleted successfully');
    }
    public function showBlogsToUser()
    {
        $blogs = Blog::all();
        $metatags = Metatag::where('page', 'Blog')->get();
        return view('blogs', compact('blogs', 'metatags'));
    }

    public function showSingleBlog($id)
    {
        $blog = Blog::find($id);
        // dd($blog);
        return view('blog', compact('blog'));
    }
}
