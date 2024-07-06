<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Proposal;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('staf.dashboard'); // Pastikan view ini ada
    }
    public function staf()
    {
        $totalMahasiswa = Mahasiswa::count();
        $totalProposal = Proposal::count();
        $acceptedStatusId = Status::where('status', 'Accepted')->value('id_status');
        $inProgressStatusId = Status::where('status', 'In Progress')->value('id_status');

        $selesaiProposal = Proposal::where('id_status', $acceptedStatusId)->count();
        $prosesProposal = Proposal::where('id_status', $inProgressStatusId)->count();

        return view('staf.dashboard', compact('totalMahasiswa', 'totalProposal', 'selesaiProposal', 'prosesProposal'));
    }
    public function ketua_prodi()
    {
        $totalMahasiswa = Mahasiswa::count();
        $totalProposal = Proposal::count();
        $acceptedStatusId = Status::where('status', 'Accepted')->value('id_status');
        $inProgressStatusId = Status::where('status', 'In Progress')->value('id_status');

        $selesaiProposal = Proposal::where('id_status', $acceptedStatusId)->count();
        $prosesProposal = Proposal::where('id_status', $inProgressStatusId)->count();

        return view('ketua-prodi.dashboard', compact('totalMahasiswa', 'totalProposal', 'selesaiProposal', 'prosesProposal'));
    }
}
