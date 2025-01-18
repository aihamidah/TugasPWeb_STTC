<?php

namespace App\Http\Controllers;

use App\Models\Dosens;
use Illuminate\Http\Request;

class DosensController extends Controller
{
    /**
     * Tampilkan daftar dosen.
     */
    public function index()
    {
        $dosens = Dosens::all();
        return view('dosens.index', compact('dosens'));
    }

    /**
     * Tampilkan form untuk menambahkan dosen baru.
     */
    public function create()
    {
        return view('dosens.create');
    }

    /**
     * Simpan data dosen yang baru ditambahkan.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nidn' => 'required|numeric|unique:dosens',
            'program_studi' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens',
            'phone' => 'required|string|max:15',
            'address' => 'nullable|string',
        ]);

        Dosens::create($request->all());

        return redirect()->route('dosens.index')
                         ->with('success', 'Dosen berhasil ditambahkan.');
    }

    /**
     * Tampilkan data dosen berdasarkan ID.
     */
    public function show(Dosens $dosens)
    {
        return view('dosens.show', compact('dosens'));
    }

    /**
     * Tampilkan form untuk mengedit data dosen.
     */
    public function edit(Dosens $dosens)
    {
        return view('dosens.edit', compact('dosens'));
    }

    /**
     * Update data dosen yang ada.
     */
    public function update(Request $request, Dosens $dosens)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nidn' => 'required|numeric|unique:dosens,nidn,'.$dosens->id,
            'program_studi' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email,'.$dosens->id,
            'phone' => 'required|string|max:15',
            'address' => 'nullable|string',
        ]);

        $dosens->update($request->all());

        return redirect()->route('dosens.index')
                         ->with('success', 'Data dosen berhasil diperbarui.');
    }

    /**
     * Hapus data dosen.
     */
    public function destroy(Dosens $dosens)
    {
        $dosens->delete();

        return redirect()->route('dosens.index')
                         ->with('success', 'Dosen berhasil dihapus.');
    }
}
