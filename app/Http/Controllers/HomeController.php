<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected array $middleware = [
        'auth'
    ];

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function blogs()
    {
        $blogs = Blog::latest()->get();
        return view('blogs', compact('blogs'));
    }

    public function addBlog(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'required|string|unique:blogs,slug',
            'short_description' => 'required|string|max:500',
            'image' => 'required|image|max:2048',
            'category' => 'required',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
        ]);

        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->slug = $request->input('slug');
        $blog->content = $request->input('content');
        $blog->short_description = $request->input('short_description');
        $blog->category = $request->input('category');
        $blog->meta_description = $request->input('meta_description');
        $blog->meta_keywords = $request->input('meta_keywords');
        

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'_'.$image->getClientOriginalName();

            // Move directly to public/blogs
            $image->move(public_path('BlogImages'), $filename);

            // Save relative path for later use
            $blog->image = 'BlogImages/'.$filename;
        }

        $blog->save();

        return redirect()->route('blogs')->with('success', 'Blog added successfully.');
    }

    public function editBlog(Request $request){
        $request->validate([
            'id' => 'required|exists:blogs,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'required|string|unique:blogs,slug,'.$request->id,
            'short_description' => 'required|string|max:500',
            'image' => 'nullable|image|max:2048',
            'category' => 'required',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
        ]);

        $blog = Blog::find($request->id);
        $blog->title = $request->input('title');
        $blog->slug = $request->input('slug');
        $blog->content = $request->input('content');
        $blog->short_description = $request->input('short_description');
        $blog->category = $request->input('category');
        $blog->meta_description = $request->input('meta_description');
        $blog->meta_keywords = $request->input('meta_keywords');
        

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'_'.$image->getClientOriginalName();

            // Move directly to public/blogs
            $image->move(public_path('BlogImages'), $filename);

            // Save relative path for later use
            $blog->image = 'BlogImages/'.$filename;
        }

        $blog->save();

        return redirect()->route('blogs')->with('success', 'Blog updated successfully.');
    }

    public function services()
    {
        $services = Service::latest()->get();
        return view('services', compact('services'));
    }

    public function addService(Request $request){
        $request->validate([
            'name' => 'required|unique:services,name',
            'slug' => 'required|unique:services,slug',
            'content' => 'required'
        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->content = $request->content;

        $service->save();

        return redirect()->route('services')->with('sucess', 'Service added successfully!');
    }

    public function editService(Request $request){
        $request->validate([
            'id' => 'required|exists:services,id',
            'name' => 'required|unique:services,name'.$request->id,
            'slug' => 'required|unique:services,slug'.$request->id,
            'content' => 'required'
        ]);

        $service = Service::find($request->id);
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->content = $request->content;

        $service->save();

        return redirect()->route('services')->with('sucess', 'Service updated successfully!');
    }

    public function queries()
    {
        return view('queries');
    }


}
