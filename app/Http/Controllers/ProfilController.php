<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('staf.profil.index', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('staf.profil.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role' => 'required|string|max:255',
            'profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::findOrFail($id);

        if ($request->hasFile('profil')) {
            // Hapus foto profil lama jika ada
            if ($user->profil && Storage::exists('img/' . $user->profil)) {
                Storage::delete('img/' . $user->profil);
            }
            // Simpan foto profil baru
            $filename = time() . '.' . $request->profil->extension();
            $request->profil->move(public_path('img'), $filename);
            $user->profil = $filename;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'profil' => $user->profil ?? $user->profil, // Tetap simpan profil lama jika tidak ada yang baru
        ]);

        return redirect()->route('staf.profil.index', $user->id)->with('success', 'Profil berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        $user->delete(); // Hapus data pengguna

        return redirect()->route('staf.profil.index')->with('success', 'User deleted successfully.');
    }
}
