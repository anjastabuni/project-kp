<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('staf.profil.index', compact('users'));
    }
    public function edit(User $user)
    {
        return view('staf.profil.edit', compact('user')); // Tampilkan form edit untuk pengguna
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|string|in:staff,ketua_prodi', // Validasi role
        ]);

        $user->update($request->only('name', 'email', 'role')); // Update data pengguna

        return redirect()->route('staf.profil.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete(); // Hapus data pengguna

        return redirect()->route('staf.profil.index')->with('success', 'User deleted successfully.');
    }
}
