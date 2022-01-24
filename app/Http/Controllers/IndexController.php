<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\HomeTitle;

class IndexController extends Controller
{
    public  function index() {

        $homeTitle = HomeTitle::first();


        return view('pages.index',compact('homeTitle'));

    }

    public function about() {
        return view('pages.about');
    }

    public function blog() {
        return view('pages.blog');
    }

    public function news($id) {
        return view('pages.blog-single',compact('id'));
    }
}
