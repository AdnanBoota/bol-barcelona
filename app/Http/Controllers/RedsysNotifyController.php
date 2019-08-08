<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ssheduardo\Redsys\Facades\Redsys;

use \Gloudemans\Shoppingcart\Facades\Cart;
use Symfony\Component\HttpFoundation\Session\Session;
class RedsysNotifyController extends Controller
{
    public function index(Request $request){
    
        $key = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7';
        $parameters = Redsys::getMerchantParameters($request->input('Ds_MerchantParameters'));
        $DsResponse = $parameters["Ds_Response"];
        $DsResponse += 0;

        if (Redsys::check($key, $request->input()) && $DsResponse <= 99) {
            // Cart::store('23');

        } else {
            //lo que quieras que haga si no es positivo

        }
    }
    

}
