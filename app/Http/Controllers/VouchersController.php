<?php

namespace App\Http\Controllers;

use App\Vouchers;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        if (isset($_POST['submit_voucher'])) {
            $voucher_code = $_POST['voucher_code'];
            if (empty($voucher_code)) {
                return back()->withInput();
            } else {
                $dt = Carbon::now();
                $voucher = Vouchers::where('name', $voucher_code)->first();
                if(!is_object($voucher)){
                    return redirect()->back()->with('error', 'Invalid Voucher!');
                }
                else{
                    
                    // Cart::update
                    return redirect()->back()->with('success', $voucher->value);
                }
            }
        } else {
            $data['records'] = Vouchers::all();
            //        dd($bowls);
            return view('admin/vouchers/vouchers', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        //        dd($data);
        return view('admin/vouchers/create-voucher', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //        dd($data);

        //        $data['type']
        $bowl = Vouchers::create($data);
        return redirect('admin/vouchers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array();
        $data['record'] = Vouchers::find($id);
        //        dd($data);
        //        dd($data['record']->ingredients->pluck('id'));
        return view('admin/vouchers/create-voucher', $data);
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
        $data = $request->all();

        $record = Vouchers::find($id);
        $record->update($data);

        return redirect('admin/vouchers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vouchers::destroy($id);
        return redirect('admin/vouchers');
    }
}
