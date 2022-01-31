<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\HomeTitle;

class IndexController extends Controller
{
    public  function index() {

        $homeTitle = HomeTitle::first();


        return view('pages.index',compact('homeTitle'));

    }

    public function about($slug) {
        return view('pages.about',compact('slug'));
    }

    public function blog() {

        $posts = Post::simplePaginate(1);
        return view('pages.blog',compact('posts'));
    }

    public function news($slug) {

        $article = Post::where('slug', [$slug])->first();

        return view('pages.blog-single',compact('slug','article'));
    }
}
