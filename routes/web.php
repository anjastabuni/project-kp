<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataProposalController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', function () {
    return view('login');
});
Route::get('/staf/dashboard', [DashboardController::class, 'index'])->name('staf.dashboard');
Route::get('/ketua-prodi/dashboard', [DashboardController::class, 'ketua'])->name('ketua-prodi.dashboard');
Route::get('/staf/data-proposal', [DashboardController::class, 'data-proposal'])->name('staf.data-proposal');

// Route::resource('staf/proposal', ProposalController::class)->except(['show']);

// routing crud proposal
Route::get('staf/proposal', [ProposalController::class, 'index'])->name('staf.proposal.index');
Route::get('staf/proposal/create', [ProposalController::class, 'create'])->name('staf.proposal.create');
Route::post('staf/proposal', [ProposalController::class, 'store'])->name('staf.proposal.store');
Route::get('staf/proposal/{id_proposal}/edit', [ProposalController::class, 'edit'])->name('staf.proposal.edit');
Route::put('staf/proposal/{id_proposal}', [ProposalController::class, 'update'])->name('staf.proposal.update');
Route::delete('staf/proposal/{id_proposal}', [ProposalController::class, 'destroy'])->name('staf.proposal.destroy');
Route::delete('staf/proposal/{id_proposal}', [ProposalController::class, 'destroy'])->name('staf.proposal.destroy');

// routing crud mahasiswa
Route::get('staf/mahasiswa', [MahasiswaController::class, 'index'])->name('staf.mahasiswa.index');
Route::get('staf/mahasiswa/create', [MahasiswaController::class, 'create'])->name('staf.mahasiswa.create');
Route::post('staf/mahasiswa', [MahasiswaController::class, 'store'])->name('staf.mahasiswa.store');
Route::get('staf/mahasiswa/{npm}/edit', [MahasiswaController::class, 'edit'])->name('staf.mahasiswa.edit');
Route::put('staf/mahasiswa/{npm}', [MahasiswaController::class, 'update'])->name('staf.mahasiswa.update');
Route::delete('staf/mahasiswa/{npm}', [MahasiswaController::class, 'destroy'])->name('staf.mahasiswa.destroy');

// routing status
Route::get('staf/status', [StatusController::class, 'index'])->name('staf.status.index');

// routing ketua prodi
Route::get('ketua-prodi/laporan', [LaporanController::class, 'index'])->name('ketua-prodi.laporan.index');

//data proposal
Route::get('staf/data-proposal', [DataProposalController::class, 'index'])->name('staf.data-proposal.index');
