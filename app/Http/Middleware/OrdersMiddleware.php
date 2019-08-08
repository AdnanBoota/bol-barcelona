<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Auth\User;
use \Gloudemans\Shoppingcart\Facades\Cart;
use App\Orders;
use \App\OrdersDetail;

class OrdersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $pickup_time = $request->route('pick_time');
        //    $pickup_time = $request->route('name');
        // Cart::add($item->id);
        // $user = new User();
        // $user->name = $request->route('name');
        // $user->email = $request->route('email');
        // $user->password = 'abc';
        // $user->save();
        $all_items = Cart::content();
        $subtotal = Cart::subtotal();

        $order = new Orders();
        $order->customer_name = $request->route('name');
        $order->customer_email = $request->route('email');
        $order->customer_phone = $request->route('phone');
        $order->pickup_time = $request->route('pick_time');
        $order->total = $subtotal;
        $order->save();


        
        // $detail_order = [];
        foreach ($all_items as $item) {
            // dd($item->name);
            $detail_order = new OrdersDetail(); 
            // $detail_order[$item] = array($item->name,$item->qty,$item->price);
            // $detail_order['name'] = $item->name;
            // $detail_order['quantity'] = $item->qty;
            // $detail_order['price'] = $item->price;
            $detail_order->name = $item->name;
            $detail_order->quantity = $item->qty;
            $detail_order->price = $item->price;
            $order->orders_detail()->save($detail_order);
        
            
        }
       
        //  $detail_order->orders()->associate($order);
        // $order->orders_detail()->delete();

        // Cart::pickup_time('pickup_time')->store('mona lesa');
        // Cart::store($request->route('name'));
        // Cart::instance($pickup_time)->store($request->route('name'));


        return $next($request);
    }
}
