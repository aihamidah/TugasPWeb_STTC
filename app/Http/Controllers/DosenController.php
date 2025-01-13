<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data dari form
        $validated = $request->validate([
            'name' => 'required|string',
            'nidn' => 'required|string|unique:dosens',
            'program_studi' => 'required|string',
            'email' => 'required|email|unique:dosens',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        // Menyimpan data dosen
        Dosen::create($validated);

        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->route('dosens.index')->with('success', 'Data dosen berhasil disimpan!');
    }
}
