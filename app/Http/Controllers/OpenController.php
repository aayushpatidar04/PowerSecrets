<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;


class OpenController extends Controller
{
    public function insights(){
        // Try to get latest featured blog
        $featuredBlog = Blog::where('category', 'Featured')
                            ->latest()
                            ->first();

        // If no featured blog, fallback to latest blog
        if (!$featuredBlog) {
            $featuredBlog = Blog::latest()->first();
        }

        // Fetch two latest blogs excluding the featured one
        $latestBlogs = Blog::where('id', '!=', $featuredBlog->id)
                        ->latest()
                        ->take(2)
                        ->get();

        // Remaining blogs excluding featured + those two
        $excludedIds = collect([$featuredBlog->id])->merge($latestBlogs->pluck('id'));

        $remainingBlogs = Blog::whereNotIn('id', $excludedIds)
                            ->latest()
                            ->paginate(6);

        return view('insights', compact('featuredBlog', 'latestBlogs', 'remainingBlogs'));

    }

    public function services($slug){
        $service = Service::where('slug', $slug)->first();
        return view('audit-services', compact('service'));
    }

    public function blog($slug){
        $blog = Blog::where('slug', $slug)->first();
        return view('blog-details', compact('blog'));
    }
}
