<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CheckoutController extends Controller
{
    public function checkout(Request $request) {
        $formData = $request->all();
        //dd($request);
        return view('checkout', ['formData' => $formData]);
        //return view('checkout');
    }
}