<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PcBuilderController extends Controller
{
    public function pcbuilder() {
        $CPUCoolers = DB::table('CPUCoolers')->get();
        $CPUs = DB::table('CPUs')->get();
        $Cases = DB::table('Cases')->get();
        $GPUs = DB::table('GPUs')->get();
        $Motherboards = DB::table('Motherboards')->get();
        $PSUs = DB::table('PSUs')->get();
        $RAM = DB::table('RAM')->get();
        $SSDs = DB::table('SSDs')->get();
        return view('pcbuilder',)
            ->with('CPUCoolers', $CPUCoolers)
            ->with('CPUs', $CPUs)
            ->with('Cases', $Cases)
            ->with('GPUs', $GPUs)
            ->with('Motherboard', $Motherboards)
            ->with('PSUs', $PSUs)
            ->with('RAM', $RAM)
            ->with('SSDs', $SSDs);
    }
}
