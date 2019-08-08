<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedsysPaymentVerified extends Controller
{
    public function index(Request $request)
    {
        
        return redirect()->back()->with('success_payment','your payment has been made successfully');
        
    }
}
