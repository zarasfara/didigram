<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public  function index() {

        $product = Product::first();

        return view('pages.index',['product'=>$product]);

    }

    public function about() {
        return view('pages.about');
    }
}
