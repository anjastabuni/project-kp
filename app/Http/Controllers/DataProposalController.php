<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataProposalController extends Controller
{
    public function index(Request $request)
    {
        // Mulai dengan query untuk proposal dengan relasi mahasiswa dan status
        $query = Proposal::with(['mahasiswa', 'status']);

        if ($request->has('tahun') && $request->tahun) {
            $query->whereHas('mahasiswa', function ($q) use ($request) {
                $q->whereYear('angkatan', $request->tahun);
            });
        }

        // Filter berdasarkan status jika ada
        if ($request->has('status') && $request->status) {
            $query->where('id_status', $request->status);
        }

        // Ambil data proposals sesuai filter dan relasi
        $proposals = $query->get();

        // Ambil semua status untuk filter di view
        $statuses = Status::all();
        $no = 1;

        return view('staf.data-proposal.index', compact('proposals', 'statuses', 'no'));
    }
}
