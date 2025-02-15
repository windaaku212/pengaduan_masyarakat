<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }



    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nik' => 'required|string|max:255|unique:users,nik',
            'name' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'notelepon' => 'required|string|max:255|unique:users,notelepon',
            'email' => 'required|string|max:255|unique:users,email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan ke database
        User::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin, // Simpan jenis kelamin
            'alamat' => $request->alamat,
            'notelepon' => $request->notelepon,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hashing password
        ]);

        // Redirect ke halaman register dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login!');
    }


    // Proses Login
    public function authenticate(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Ambil user yang login
            $user = Auth::user();

            // Redirect berdasarkan role
            if ($user->role === 'Admin') {
                return redirect()->intended('/admin');
            } elseif ($user->role === 'Petugas') {
                return redirect()->intended('/dashboardpetugas');
            } else {
                return redirect()->intended('/masyarakat');
            }
        }

        // Jika gagal, kembali ke halaman login dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }


    // Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/indexmasyarakat')->with('success', 'Anda telah logout.');
    }
}
