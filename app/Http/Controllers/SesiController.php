<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class SesiController extends Controller
{
    public function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string'
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Coba untuk login
        if (Auth::attempt($infologin)) {
            $request->session()->regenerate();

            // Redirect berdasarkan role pengguna
            if (Auth::user()->role == 'ketua_prodi') {
                return redirect('ketua_prodi/dashboard')->with('success', 'Anda Login Sebagai Ketua Prodi!');
            } elseif (Auth::user()->role == 'staf') {
                return redirect('staf/dashboard')->with('success', 'Anda Login Sebagai Staf Prodi!');
            }
        } else {
            // Jika login gagal, kembali ke halaman login dengan error
            return redirect()->back()->withErrors(['login' => 'Email atau password salah!'])->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
