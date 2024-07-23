<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\Status;
use App\Models\Mahasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $no = 1;
        $proposals = Proposal::all();
        $query = Proposal::query();
        $search = $request->input('search');
        if ($search) {
            $query->where('judul', 'LIKE', "%{$search}%")
                ->orWhere('id_mahasiswa', 'LIKE', "%{$search}%");
        }
        $proposals = $query->get();
        return view('staf.proposal.index', compact('proposals', 'no', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Status::all();
        return view('staf.proposal.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_mahasiswa' => 'required|string|max:8|exists:mahasiswas,npm',
            'judul' => 'required|string|max:255',
            'pembimbing' => 'required|string|max:50',
            'tgl_pengajuan' => 'required|date',
            'id_status' => 'required|string|max:6|exists:statuses,id_status',  // Validasi untuk id_status
        ]);

        // Ambil mahasiswa berdasarkan npm
        $mahasiswa = Mahasiswa::where('npm', $request->id_mahasiswa)->firstOrFail();

        // Ambil 2 digit pertama dan 3 digit terakhir dari npm untuk id_proposal
        $twoDigits = substr($request->id_mahasiswa, 0, 2);
        $threeDigits = substr($request->id_mahasiswa, -3);
        $id_proposal = 'P-' . $twoDigits . $threeDigits;

        // Pastikan id_proposal yang dihasilkan unik
        while (Proposal::where('id_proposal', $id_proposal)->exists()) {
            $threeDigits = str_pad((int) $threeDigits + 1, 3, '0', STR_PAD_LEFT);
            $id_proposal = 'P-' . $twoDigits . $threeDigits;
        }

        // Buat proposal baru
        Proposal::create([
            'id_proposal' => $id_proposal,
            'id_mahasiswa' => $request->id_mahasiswa,
            'judul' => $request->judul,
            'pembimbing' => $request->pembimbing,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'id_status' => $request->id_status,
        ]);

        return redirect()->route('staf.proposal.index')->with('success', 'Proposal berhasil ditambahkan');
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
    public function edit($id_proposal)
    {
        $proposal = Proposal::with('mahasiswa', 'status')->findOrFail($id_proposal);
        $statuses = Status::all(); // Mendapatkan semua status
        return view('staf.proposal.edit', compact('proposal', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_proposal)
    {
        $request->validate([
            'id_mahasiswa' => 'required|string|max:8|exists:mahasiswas,npm',
            'judul' => 'required|string|max:255',
            'pembimbing' => 'required|string|max:50',
            'tgl_pengajuan' => 'required|date',
            'id_status' => 'required|string|max:6|exists:statuses,id_status',
        ]);

        $proposal = Proposal::findOrFail($id_proposal);
        $proposal->id_mahasiswa = $request->id_mahasiswa;
        $proposal->judul = $request->judul;
        $proposal->pembimbing = $request->pembimbing;
        $proposal->tgl_pengajuan = $request->tgl_pengajuan;
        $proposal->id_status = $request->id_status;
        $proposal->save();

        return redirect()->route('staf.proposal.index')->with('success', 'Proposal berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_proposal)
    {
        $proposal = Proposal::findOrFail($id_proposal);
        $proposal->delete();

        return redirect()->route('staf.proposal.index')->with('success', 'Proposal berhasil dihapus');
    }
}
