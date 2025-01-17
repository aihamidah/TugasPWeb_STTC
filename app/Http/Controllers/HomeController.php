<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function profile()
    {
        return view('profile');
    }
    public function fasilitas()
    {
        return view('fasilitas');
    }
    public function ekstrakulikuler()
    {
        return view('ekstrakulikuler');
    }
    public function tampildata()
    {
        return view('tampildata');
    }
    public function DataAkademik()
    {
        return view('DataAkademik');
    }
    public function contact()
    {
        return view('contact');
    }

    //Jurusan
    public function informatika()
    {
    return view('informatika');
    }
public function teknikIndustri()
    {
    return view('TeknikIndustri');
    }
}
