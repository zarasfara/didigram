<?php

namespace App\Http\Controllers;

use App\Models\HomeBanner;
use App\Models\Post;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\HomeTitle;
use Illuminate\Http\UploadedFile;

class IndexController extends Controller
{
    public function index()
    {

        $homeTitle = HomeTitle::first();

        $homeBanner = HomeBanner::where('status', '=', 'show')->get();

        return view('pages.index', compact('homeTitle', 'homeBanner'));

    }

    public function about($slug)
    {
        return view('pages.about', compact('slug'));
    }

    public function blog()
    {

        $posts = Post::simplePaginate(1);
        return view('pages.blog', compact('posts'));
    }

    public function news($slug)
    {

        $article = Post::where('slug', [$slug])->first();

        return view('pages.blog-single', compact('slug', 'article'));
    }

    public function reviewUpload(Request $request)
    {
        $request->validate([

           'name' =>'required',

           'email' => 'required|email',

           'message' =>'required',

           'file' => 'required|file|image|mimes:jpg,jpeg,png,bmp|max:2000'
        ]);

        $path = $request->file('file')->store('reviews');

        $params = $request->all();

        $params['file'] = $path;

        Review::create($params);

       return redirect()->back();

    }
}
