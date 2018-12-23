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
        'vouchers' => 'VouchersController',
        'orders' => 'OrdersController',
    ]);
});

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
//        $bowls = \App\Bowls::with('ingredients')->get()->groupBy('type');
//        dd($bowls);
        return view($slug, ['title' => $slug])->render();
    }

    if ($slug == 'custom-bowl') {
//        $bowls = \App\Bowls::with('ingredients')->get()->groupBy('type');
//        dd($bowls);
        return view($slug, ['title' => $slug])->render();
    }

    if (view()->exists($slug)) {
        return view($slug, ['title' => $slug])->render();
    }
    return "Page not exists";
});


//Route::get('/home', 'HomeController@index')->name('home');
