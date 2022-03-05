<?php

namespace App\Http\Controllers;

use App\Http\Requests\Index\ReviewRequest;
use App\Models\HomeBanner;
use App\Models\HomeTitle;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Review;
use App\Models\Tag;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index()
    {

        $homeTitle = HomeTitle::first();
        $latestArticles = Post::latest('created_at')->limit('4')->get();
        $homeBanner = HomeBanner::where('status', '=', 'show')->get();
//        $date = Carbon::parse($latestArticles[created_at]);
//            dd($latestArticles['items']);

        $data = [
            'homeTitle' => $homeTitle,
            'latestArticles' => $latestArticles,
            'homeBanner' => $homeBanner
        ];

        return view('pages.index', ($data));

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

    public function article($slug)
    {
        $article = Post::where('slug', [$slug])->first();
        $date = Carbon::parse($article->created_at);
        $allTags = Tag::all();
        $tagsForPost = $article->tags()->get();
        if(!$article) abort(404);

        $data = [
            'article' => $article,
            'date' => $date,
            'allTags' => $allTags,
            'tagsForPost' => $tagsForPost,
        ];


        return view('pages.blog_single', ($data));
    }

    public function reviewUpload(ReviewRequest $request)
    {
        $request->validated();

        $path = $request->file('file')->store('/reviews', 'public');

        $params = $request->all();

        $params['file'] = $path;
        Review::create($params);
    }

    public function contact() {
        return view('pages.contact');
    }
}
