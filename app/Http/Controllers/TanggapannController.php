<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\pengaduan;
use App\Models\tanggapan;


class TanggapannController extends Controller
{
    public function create()
    {
        $pengaduans = Pengaduan::all(); // Ambil semua pengaduan
        return view('backend.content.tanggapan.create', compact('pengaduans'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'tanggapan' => 'required|string',
            'tanggal_pengaduan' => 'required|date',
            'pengaduan_id' => 'required|exists:pengaduans,id',
        ]);

        // Ambil ID user yang sedang login
        $userId = Auth::id();
        if (!$userId) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Simpan tanggapan
        tanggapan::create([
            'user_id' => $userId,  // ID user yang sedang login
            'pengaduan_id' => $request->pengaduan_id,  // ID pengaduan yang dipilih
            'tanggapan' => $request->tanggapan,  // Isi tanggapan
            'tanggal_tanggapan' => $request->tanggal_pengaduan,  // Tanggal tanggapan
        ]);

        // Redirect ke halaman pengaduan setelah berhasil
        return redirect()->to('/pengaduan')
            ->with('success', 'Tanggapan berhasil dikirim.');
    }
}
