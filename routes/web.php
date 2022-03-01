<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[IndexController::class, 'index'])->name('home');

Route::get('/about',[IndexController::class, 'about'])->name('about');

Route::get('/blog/{slug}',[IndexController::class, 'news'])->name('article');

Route::get('/blog',[IndexController::class, 'blog'])->name('blog');

Route::post('/review',[IndexController::class,'reviewUpload'])->name('review');

Route::get('/contact',[IndexController::class,'contact'])->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
