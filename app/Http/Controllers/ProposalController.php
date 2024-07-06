<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $no = 1;
        $proposals = Proposal::all();
        return view('staf.proposal.index', compact('proposals', 'no'));
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
            'id_proposal' => 'required|string|max:8|unique:proposals,id_proposal',
            'id_mahasiswa' => 'required|string|max:8|exists:mahasiswas,npm',
            'judul' => 'required|string|max:255',
            'pembimbing' => 'required|string|max:50',
            'tgl_pengajuan' => 'required|date',
            'id_status' => 'required|string|max:6|exists:statuses,id_status',  // Validasi untuk id_status
        ]);

        Proposal::create([
            'id_proposal' => $request->id_proposal,
            'id_mahasiswa' => $request->id_mahasiswa,
            'judul' => $request->judul,
            'pembimbing' => $request->pembimbing,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'id_status' => $request->id_status,  // Menyimpan id_status
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
        $proposal = Proposal::findOrFail($id_proposal);
        return view('staf.proposal.edit', compact('proposal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_proposal)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pembimbing' => 'required|string|max:50',
            'tgl_pengajuan' => 'required|date',
        ]);

        $proposal = Proposal::findOrFail($id_proposal);
        $proposal->judul = $request->judul;
        $proposal->pembimbing = $request->pembimbing;
        $proposal->tgl_pengajuan = $request->tgl_pengajuan;
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
