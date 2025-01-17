<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class TempatController extends Controller
{
    public function Aula()
    {
        return view('tempat.Aula');
    }

    public function mesjid()
    {
        return view('tempat.mesjid');
    }

    public function kelas()
    {
        return view('tempat.kelas');
    }

    public function laboratoriumK()
    {
        return view('tempat.laboratoriumK');
    }

    public function praktekTI()
    {
        return view('tempat.praktekTI');
    }

    public function perpustakaan()
    {
        return view('tempat.perpustakaan');
    }

    public function asrama()
    {
        return view('tempat.asrama');
    }

    public function lapangan()
    {
        return view('tempat.lapangan');
    }

    public function kantin()
    {
        return view('tempat.kantin');
    }
}
