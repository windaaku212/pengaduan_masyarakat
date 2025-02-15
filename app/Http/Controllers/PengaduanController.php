<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::with(['user', 'kategori'])->get();
        return view('backend.content.laporan.index', compact('pengaduans')); // Perbaikan disini
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::with(['user', 'kategori'])->findOrFail($id);

        return view('backend.content.laporan.detail', compact('pengaduan'));
    }

    public function edit(pengaduan $pengaduan, $id)
    {
        $pengaduan = Pengaduan::with(['user', 'kategori', 'lokasi'])->findOrFail($id);
        return view('backend.content.pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     */
    // PengaduanController.php
    public function update(Request $request, pengaduan $pengaduan, $id)
    {

        $pengaduan = pengaduan::find($id);
        $validator = Validator::make($request->all(), [
            'status' => 'required|string|max:255|in:Proses,Selesai,Ditolak',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        // Update status pengaduan
        $pengaduan->update([
            'status' => $request->input('status'),
        ]);

        return redirect()->to('/pengaduan')->with('success', 'Status Berhasil Diperbarui');
    }




    /**
     * Remove the specified resource from storage.
     */
    // PengaduanController.php

    // Pastikan Anda hanya menerima model 'Pengaduan' pada parameter
    public function destroy(Pengaduan $pengaduan)
    {
        // Hapus file lampiran jika ada
        if (Storage::exists($pengaduan->foto)) {
            Storage::delete($pengaduan->foto);
        }

        // Hapus data pengaduan
        $pengaduan->delete();

        // Redirect sesuai hasil penghapusan
        return redirect()->to('/pengaduan')->with('success', 'Data Berhasil Dihapus');
    }
}
