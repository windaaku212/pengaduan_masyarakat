<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class LaporanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::with(['user', 'kategori'])->get();
        return view('frontend.laporan', compact('pengaduans')); // Perbaikan disini
    }
    
    public function detail($id){
        $pengaduan = Pengaduan::with(['user', 'kategori'])->findOrFail($id);
        return view('frontend.detaillaporan', compact('pengaduan'));
    }
    
    
}

