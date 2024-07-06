<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Proposal;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMahasiswa = Mahasiswa::count();
        $totalProposal = Proposal::count();
        $acceptedStatusId = Status::where('status', 'Accepted')->value('id_status');
        $inProgressStatusId = Status::where('status', 'In Progress')->value('id_status');

        $selesaiProposal = Proposal::where('id_status', $acceptedStatusId)->count();
        $prosesProposal = Proposal::where('id_status', $inProgressStatusId)->count();

        return view('staf.dashboard', compact('totalMahasiswa', 'totalProposal', 'selesaiProposal', 'prosesProposal',));
    }
    public function ketua()
    {
        $totalMahasiswa = Mahasiswa::count();
        $totalProposal = Proposal::count();
        $acceptedStatusId = Status::where('status', 'Accepted')->value('id_status');
        $inProgressStatusId = Status::where('status', 'In Progress')->value('id_status');

        $selesaiProposal = Proposal::where('id_status', $acceptedStatusId)->count();
        $prosesProposal = Proposal::where('id_status', $inProgressStatusId)->count();

        return view('ketua-prodi.dashboard', compact('totalMahasiswa', 'totalProposal', 'selesaiProposal', 'prosesProposal'));
    }
    public function login()
    {
        return view('login');
    }
}