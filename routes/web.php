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
use Symfony\Component\HttpFoundation\Session\Session;

Route::get('/', function () {
    return view('home', ['title' => 'home']);
});

Auth::routes();

Route::get('/admin', function () {
    //    dd(\Illuminate\Support\Facades\Hash::make('admin'));
    return view('admin/admin');
});
//->middleware('auth')
Route::prefix('admin')->group(function () {
    Route::resources([
        'bowls' => 'BowlsController',
        'ingredients' => 'IngredientsController',
        'custom-ingredients' => 'CustomIngredientsController',
        'vouchers' => 'VouchersController',
        'orders' => 'OrdersController',
    ]);
});
Route::post('/redsys_payment', 'RedsysController@index');
Route::post('/voucher_validation', 'VouchersController@index');
Route::get('/tpv_ok/{name}/{email}/{phone}/{pick_time}', ['middleware' => 'OrdersMiddleware', 'uses' => 'RedsysPaymentVerified@index']);
Route::get('/notify', 'RedsysNotifyController@index');
// Route::get('/redsys', ['as' => 'redsys', 'uses' => 'RedsysController@index']);
//$2y$10$ECfrV7WW3Xk99/bzLx2Fku5cbLUpT3E3p4b/yPjqVgC95CQR/BCBC
Route::get('/{slug}', function ($slug) {
    //    dd($slug);

    if ($slug == 'file') {
        $name = Request::input('name');
        $filename = $name . '.pdf';
        $path = storage_path($filename);

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }

    if ($slug == 'order-online-pickup') {
        $bowls = \App\Bowls::with('ingredients')->get()->groupBy('type');
        return view($slug, ['title' => $slug, 'bowls' => $bowls])->render();
    }
    if ($slug == 'custom-bowl') {
        $ingreds = \App\CustomIngredients::get()->groupBy('category');
        return view($slug, ['title' => $slug, 'ingreds' => $ingreds])->render();
    }

    if ($slug == 'checkout') {
        $items = Request::input('items');

        $items = json_decode($items);
        // dd($items);

        if (Session()->has('success')) {
            // dd('returned');
            $voucher_price = Session()->get('success');
            // dd($voucher_price);
            $final_payment = Cart::subtotal() - $voucher_price;
            // dd(Cart::subtotal($final_payment));
            Cart::destroy();
            foreach ($items as $item) {
                $item->total = $final_payment;
                Cart::add($item->id, $item->name, 1, $item->total, ['text' => $item->text]);
            }
        }
        if (Session()->has('success_payment')) {
            Cart::destroy();
            return view('tpv_ok', array('title' => 'Bol'));
        } else {
            $extra_ingredients = (object) [];
            Cart::destroy();
            // $extra_ingredients = Array();
            foreach ($items as $item) {
                if (property_exists($item, 'items')) {
                    $extra_ingredients = json_decode(json_encode((object) $item->items), true);
                    Cart::add($item->id, $item->name, 1, $item->total, ['ingredients' => $extra_ingredients]);
                } else {
                    Cart::add($item->id, $item->name, 1, $item->total);
                }
            }
        }

        $cart_items = Cart::content();
        // dd($cart_items);
        return view($slug, ['title' => $slug, 'cart_items' => $cart_items])->render();
    }


    if (view()->exists($slug)) {
        return view($slug, ['title' => $slug])->render();
    }
    return "Page not exists";
});


//Route::get('/home', 'HomeController@index')->name('home');
