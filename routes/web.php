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

use \Gloudemans\Shoppingcart\Facades\Cart;


Route::get('/', function () {
    return view('home-test', ['title' => 'Test Page']);
    return view('home', ['title' => 'home']);
});

// Route::get('/test', function () {
//     return view('home-test', ['title' => 'Test Page']);
// });

Auth::routes(['register' => false]);
Route::get('/logout', 'Auth\LoginController@logout');

//->middleware('auth')
Route::group(['middleware' => ['auth:web'], 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin/admin');
    });
    Route::resources([
        'bowls' => 'BowlsController',
        'ingredients' => 'IngredientsController',
        'custom-ingredients' => 'CustomIngredientsController',
        'vouchers' => 'VouchersController',
        'orders' => 'OrdersController',
    ]);
});


Route::get('/redsys', ['as' => 'redsys', 'uses' => 'RedsysController@index']);
//$2y$10$ECfrV7WW3Xk99/bzLx2Fku5cbLUpT3E3p4b/yPjqVgC95CQR/BCBC
Route::get('/{slug}', function ($slug) {
    //    dd($slug);

    if ($slug == 'file') {
        $name = Request::input('name');
        //        dd($name);
        $filename = $name . '.pdf';
        $path = storage_path($filename);

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }

    if ($slug == 'order-online-pickup') {
        $bowls = \App\Bowls::with('ingredients')->get()->groupBy('type');
        //        dd($bowls);
        return view($slug, ['title' => $slug, 'bowls' => $bowls])->render();
    }

    if ($slug == 'checkout') {
        $items = Request::input('items');
        $items = json_decode($items);

        Cart::destroy();
        foreach ($items as $item) {
            Cart::add($item->id, $item->name, 1, $item->total, ['text' => $item->text]);
        }

        $cart_items = Cart::content();
        //        dd(Cart::content());
        //        $bowls = \App\Bowls::with('ingredients')->get()->groupBy('type');
        //        dd($bowls);
        return view($slug, ['title' => $slug, 'cart_items' => $cart_items])->render();
    }

    if ($slug == 'custom-bowl') {
        $ingreds = \App\CustomIngredients::get()->groupBy('category');
        return view($slug, ['title' => $slug, 'ingreds' => $ingreds])->render();
    }

    if (view()->exists($slug)) {
        return view($slug, ['title' => $slug])->render();
    }
    return "Page not exists";
});


//Route::get('/home', 'HomeController@index')->name('home');
