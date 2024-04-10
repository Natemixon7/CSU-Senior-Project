<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CheckoutController extends Controller
{
    public function checkout(Request $request) {
        //$CPUCooler->save();
        //dd($request->all());
        $formData = $request->all();
        //session()->put('parts', $request->all());
        //$CPUCooler = $request->get('CPUCoolers');
        //$CPUCoolers = $request->session()->get('CPUCoolers');
        //$addData = $request->session()->put('CPUCoolers', $CPUCoolers);
        //$data = $request->session()->all();
        return view('checkout', ['formData' => $formData]); //, compact('formData'));
            //->with('CPUcooler', $CPUCooler);
    }
}