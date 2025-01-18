<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UKMController extends Controller
{
    public function kelapa()
    {
        return view('ukm.kelapa');
    }

    public function kerohanian()
    {
        return view('ukm.kerohanian');
    }

    public function olahraga()
    {
        return view('ukm.olahraga');
    }

    public function silat()
    {
        return view('ukm.silat');
    }

    public function sanggar()
    {
        return view('ukm.sanggar');
    }

    public function dignity()
    {
        return view('ukm.dignity');
    }

    public function proclub()
    {
        return view('ukm.proclub');
    }

    public function rilis()
    {
        return view('ukm.rilis');
    }

    public function kdd()
    {
        return view('ukm.kdd');
    }
}
