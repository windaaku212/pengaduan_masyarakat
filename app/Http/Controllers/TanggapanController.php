<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class TanggapanController extends Controller
{
    public function index()
    {
        // Ambil ID pengguna yang sedang login
        $userId = Auth::id();

        // Ambil semua data pengaduan yang terkait dengan user yang sedang login
        $pengaduans = Pengaduan::with(['tanggapans.user', 'tanggapans.pengaduan'])  // Eager loading relasi user dan pengaduan untuk setiap tanggapan
            ->where('user_id', $userId) // Filter berdasarkan user_id
            ->get();

        // Kirim data pengaduans dan tanggapans ke view
        return view('frontend.tanggapan', compact('pengaduans'));
    }

    public function detail($id)
    {
        // Ambil data tanggapan berdasarkan ID
        $tanggapan = Tanggapan::with(['user', 'pengaduan.kategori', 'pengaduan.lokasi'])
            ->findOrFail($id);  // Menemukan tanggapan atau gagal

        // Kirim data tanggapan ke view
        return view('frontend.tanggapan', compact('tanggapan'));
    }
}
