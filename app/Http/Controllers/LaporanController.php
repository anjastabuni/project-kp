<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $tahun = $request->input('tahun');
        $statusFilter = $request->input('status');

        // Mulai query proposal dengan relasi mahasiswa dan status
        $query = Proposal::with('mahasiswa', 'status')
            ->orderBy('id_proposal', 'desc');

        // Terapkan pencarian berdasarkan NPM atau Nama Mahasiswa
        if ($search) {
            $query->whereHas('mahasiswa', function ($q) use ($search) {
                $q->where('id_mahasiswa', 'like', "%$search%")
                    ->orWhere('nama', 'like', "%$search%")
                    ->orWhere('angkatan', 'like', "%$search%");
            });
        }

        // Filter berdasarkan tahun angkatan jika ada
        // if ($tahun) {
        //     $query->whereHas('mahasiswa', function ($q) use ($tahun) {
        //         $q->whereYear('angkatan', $tahun);
        //     });
        // }

        // Filter berdasarkan status jika ada
        if ($statusFilter) {
            $query->where('id_status', $statusFilter);
        }

        // Ambil data proposals sesuai filter dan relasi dengan paginasi
        $proposals = $query->paginate(10);

        // Ambil semua status untuk filter di view
        $statuses = Status::all();

        // Untuk menampilkan nomor urut pada tabel
        $no = ($proposals->currentPage() - 1) * $proposals->perPage() + 1;

        return view('ketua-prodi.laporan.index', compact('proposals', 'statuses', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
