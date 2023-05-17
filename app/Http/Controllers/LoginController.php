<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            return redirect()->route('sales.index')->with('success', 'Pendaftaran berhasil. Silakan login.');
        } else {
            // Autentikasi gagal
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }
    }
}
