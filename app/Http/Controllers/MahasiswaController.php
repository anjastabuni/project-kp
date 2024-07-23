<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no = 1;
        $mahasiswas = Mahasiswa::all();
        return view('staf.mahasiswa.index', compact('mahasiswas', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staf.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|string|max:8|unique:mahasiswas,npm',
            'nama' => 'required|string|max:50',
            'angkatan' => 'required|integer|digits:4|between:1900,2099', // Validasi tahun 4 digit
            // 'email' => 'required|string|email|max:50|unique:mahasiswas,email',
            'telp' => 'required|string|max:13',
        ]);

        Mahasiswa::create([
            'npm' => $request->npm,
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            // 'email' => $request->email,
            'telp' => $request->telp,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('staf.mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($npm)
    {
        $mahasiswa = Mahasiswa::findOrFail($npm);
        return view('staf.mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $npm)
    {
        // Validasi input
        $request->validate([
            'npm' => 'required|string|max:8|exists:mahasiswas,npm',
            'nama' => 'required|string|max:50',
            'angkatan' => 'required|string|max:10',  // Sesuaikan dengan kolom di migration
            // 'email' => 'required|string|email|max:50|unique:mahasiswas,email,' . $npm . ',npm',
            'telp' => 'required|string|max:13',
        ]);

        // Mencari mahasiswa berdasarkan NPM
        $mahasiswa = Mahasiswa::where('npm', $npm)->firstOrFail();

        // Mengupdate data mahasiswa
        $mahasiswa->update([
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            // 'email' => $request->email,
            'telp' => $request->telp,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('staf.mahasiswa.index')->with('success', 'Data Mahasiswa berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($npm)
    {

        // Mencari mahasiswa berdasarkan NPM
        $mahasiswa = Mahasiswa::where('npm', $npm)->firstOrFail();

        // Menghapus data mahasiswa
        $mahasiswa->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('staf.mahasiswa.index')->with('success', 'Data Mahasiswa berhasil dihapus');
    }
}
