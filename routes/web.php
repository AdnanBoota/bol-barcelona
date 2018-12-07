<?php

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

Route::get('/', function () {
    return view('home');
});


Route::get('/{slug}', function ($slug) {
//    dd('here');
    if ($slug == 'admin') return view('admin');

    if (view()->exists($slug)) {
        return view($slug, ['title' => $slug])->render();
    }
    return "Page not exists";
});

Route::get('/admin', function () {

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
