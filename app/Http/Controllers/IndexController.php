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
        if(!$article) {
            abort(404);
        }
        $date = Carbon::parse($article->created_at);

        $allTags = Tag::all();

        $tagsForPost = $article->tags()->get();


        return view('pages.blog_single', compact('slug', 'article','date','allTags','tagsForPost'));
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
