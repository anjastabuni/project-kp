<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataProposalController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilKetuaController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login'])->name('login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('', [AdminController::class, 'index']);
    Route::get('/ketua_prodi/dashboard', [AdminController::class, 'ketua_prodi'])->name('ketua-prodi.dashboard');
    Route::get('/staf/dashboard', [AdminController::class, 'staf'])->name('staf.dashboard');
    Route::get('/logout', [SesiController::class, 'logout']);

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

    // profill
    Route::get('staf/profil', [ProfilController::class, 'index'])->name('staf.profil.index');
    Route::get('users/{user}/edit', [ProfilController::class, 'edit'])->name('users.edit');
    Route::patch('users/{user}', [ProfilController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [ProfilController::class, 'destroy'])->name('users.destroy');

    Route::get('ketua-prodi/profil', [ProfilKetuaController::class, 'index'])->name('ketua-prodi.profil.index');
    Route::get('ketua-prodi/{user}/edit', [ProfilController::class, 'edit'])->name('ketua-prodi.profil.edit');
    Route::patch('ketua-prodi/{user}', [ProfilController::class, 'update'])->name('ketua-prodi.profil.update');
    Route::delete('ketua-prodi/{user}', [ProfilController::class, 'destroy'])->name('ketua-prodi.profil.destroy');
});
