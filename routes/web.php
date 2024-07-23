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

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::middleware(['ketua_prodi'])->group(function () {
        Route::get('/ketua_prodi/dashboard', [AdminController::class, 'ketua_prodi'])->name('ketua-prodi.dashboard');
        Route::get('ketua-prodi/laporan', [LaporanController::class, 'index'])->name('ketua-prodi.laporan.index');
        Route::get('ketua-prodi/profil', [ProfilKetuaController::class, 'index'])->name('ketua-prodi.profil.index');
        Route::get('ketua-prodi/profil/{id}/edit', [ProfilKetuaController::class, 'edit'])->name('ketua-prodi.profil.edit');
        Route::put('ketua-prodi/profil/{id}', [ProfilKetuaController::class, 'update'])->name('ketua-prodi.profil.update');
        Route::delete('ketua-prodi/profil/{id}', [ProfilKetuaController::class, 'destroy'])->name('ketua-prodi.profil.destroy');
    });

    Route::middleware(['staf'])->group(function () {
        Route::get('/staf/dashboard', [AdminController::class, 'staf'])->name('staf.dashboard');
        Route::get('staf/proposal', [ProposalController::class, 'index'])->name('staf.proposal.index');
        Route::get('staf/proposal/create', [ProposalController::class, 'create'])->name('staf.proposal.create');
        Route::post('staf/proposal', [ProposalController::class, 'store'])->name('staf.proposal.store');
        Route::get('staf/proposal/{id_proposal}/edit', [ProposalController::class, 'edit'])->name('staf.proposal.edit');
        Route::put('staf/proposal/{id_proposal}', [ProposalController::class, 'update'])->name('staf.proposal.update');
        Route::delete('staf/proposal/{id_proposal}', [ProposalController::class, 'destroy'])->name('staf.proposal.destroy');

        Route::get('staf/mahasiswa', [MahasiswaController::class, 'index'])->name('staf.mahasiswa.index');
        Route::get('staf/mahasiswa/create', [MahasiswaController::class, 'create'])->name('staf.mahasiswa.create');
        Route::post('staf/mahasiswa', [MahasiswaController::class, 'store'])->name('staf.mahasiswa.store');
        Route::get('staf/mahasiswa/{npm}/edit', [MahasiswaController::class, 'edit'])->name('staf.mahasiswa.edit');
        Route::put('staf/mahasiswa/{npm}', [MahasiswaController::class, 'update'])->name('staf.mahasiswa.update');
        Route::delete('staf/mahasiswa/{npm}', [MahasiswaController::class, 'destroy'])->name('staf.mahasiswa.destroy');

        Route::get('staf/status', [StatusController::class, 'index'])->name('staf.status.index');
        Route::get('staf/status/create', [StatusController::class, 'create'])->name('staf.status.create');
        Route::get('staf/status/{id_status}/edit', [StatusController::class, 'edit'])->name('staf.status.edit');
        Route::put('staf/status/{id_status}', [StatusController::class, 'update'])->name('staf.status.update');
        Route::post('staf/status', [StatusController::class, 'store'])->name('staf.status.store');
        Route::delete('staf/status/{id_status}', [StatusController::class, 'destroy'])->name('staf.status.destroy');

        Route::get('staf/data-proposal', [DataProposalController::class, 'index'])->name('staf.data-proposal.index');

        Route::get('staf/profil', [ProfilController::class, 'index'])->name('staf.profil.index');
        Route::get('staf/profil/{id}/edit', [ProfilController::class, 'edit'])->name('staf.profil.edit');
        Route::put('staf/profil/{id}', [ProfilController::class, 'update'])->name('staf.profil.update');
        Route::delete('staf/profil/{id}', [ProfilController::class, 'destroy'])->name('staf.profil.destroy');
    });

    Route::get('/logout', [SesiController::class, 'logout']);
});
