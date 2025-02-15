<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Pengaduan; // Pastikan Anda sudah import Pengaduan

class TambahlaporanController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('frontend.tambahlaporan', compact('kategori'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'kategori_id' => 'required|exists:kategori,id',
            'isi_pengaduan' => 'required|string',
            'tanggal_pengaduan' => 'required|date_format:Y-m-d',
            'judul_pengaduan' => 'required|string|max:255',
            'foto' => 'required|mimes:png,jpg,jpeg', // pastikan hanya menerima file gambar
        ]);
    
        // Jika validasi gagal, kembalikan dengan error
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
    
        // Menyiapkan data untuk disimpan
        $data = $request->all();
    
        // Menyimpan foto jika ada file yang diunggah
     // Menyimpan foto jika ada file yang diunggah
if ($request->hasFile('foto')) {
    $data['foto'] = $request->file('foto')->store('foto', 'public');
}

    
        // Membuat pengaduan
        $pengaduan = new Pengaduan();
        $pengaduan->user_id = $request->user_id;
        $pengaduan->kategori_id = $request->kategori_id;
        $pengaduan->isi_pengaduan = $request->isi_pengaduan;
        $pengaduan->tanggal_pengaduan = $request->tanggal_pengaduan;
        $pengaduan->judul_pengaduan = $request->judul_pengaduan;
        $pengaduan->foto = $data['foto'] ?? null;
        $pengaduan->status = 'Baru'; // Status default
        $pengaduan->save();
    
        // Jika berhasil, kembalikan ke dashboard dengan pesan sukses
        if ($pengaduan) {
            return redirect()->to('/laporan')->with('success', 'Data Berhasil Dibuat');
        } else {
            return back()->withInput()->withErrors('Data Gagal Dibuat');
        }
    }

}
