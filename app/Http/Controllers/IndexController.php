<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public  function index() {

        $product = Product::first();

        return view('pages.index',compact('product'));

    }

    public function about() {
        return view('pages.about');
    }
}
