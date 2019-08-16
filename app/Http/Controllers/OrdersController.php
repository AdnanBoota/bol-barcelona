<?php

namespace App\Http\Controllers;

use App\Orders;
use App\OrdersDetail;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        $orders = array();
        $orders['orders'] = Orders::get();
        foreach ($orders['orders'] as $order) {
            array_push($data, $order);
        }
        return view('admin/orders/orders')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Array();
        $orders_detail = Array();
        $order_total = Array();
        $order_total= Orders::where('id', $id)->get();
    
        // dd($order_total);
        $orders_detail = OrdersDetail::where('order_id', $id)->get();
        // dd($orders_detail);
        foreach ($orders_detail as $order) {
            array_push($data, $order);
        }
        
        // $array = explode(' ', $string);
        // dd($data);
        return view('admin/orders/orders_detail')->with(['data'=> $data,'total'=>$order_total]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return view('admin/orders/orders')->with('data', $data);
        //
    }
}
