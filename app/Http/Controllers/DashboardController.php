<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Proposal;
use App\Models\Status;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('staf.dashboard');
    }
    public function ketua()
    {
        return view('ketua-prodi.dashboard');
    }
}
