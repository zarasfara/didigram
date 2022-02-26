<?php

namespace App\Http\Controllers;

use App\Http\Requests\Index\ReviewRequest;
use App\Models\HomeBanner;
use App\Models\HomeTitle;
use App\Models\Post;
use App\Models\Review;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index()
    {

        $homeTitle = HomeTitle::first();

        $homeBanner = HomeBanner::where('status', '=', 'show')
            ->get();

        return view('pages.index', compact('homeTitle', 'homeBanner'));

    }

    public function about()
    {
        return view('pages.about');
    }

    public function blog()
    {
        $posts = Post::all();
        return view('pages.blog', compact('posts'));
    }

    public function news($slug)
    {
        $article = Post::where('slug', [$slug])->first();
        $date = Carbon::parse($article->created_at);
        return view('pages.blog-single', compact('slug', 'article','date'));
    }

    public function reviewUpload(ReviewRequest $request)
    {
        $request->validated();

        $path = $request->file('file')->store('/reviews', 'public');

        $params = $request->all();

        $params['file'] = $path;
        Review::create($params);
    }
}
