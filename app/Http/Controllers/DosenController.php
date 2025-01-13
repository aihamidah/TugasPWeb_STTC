<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nidn' => 'required|unique:dosens',
            'program_studi' => 'required',
            'email' => 'required|email|unique:dosens',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Dosen::create($request->all());

        return redirect()->back()->with('success', 'Data dosen berhasil disimpan!');
    }
}
