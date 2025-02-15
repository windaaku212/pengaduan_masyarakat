<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Barryvdh\DomPDF\Facade\Pdf;

class GeneratereportpetugasController extends Controller
{
    public function index()
    {
        return view('backend.content.generatereportpetugas.index');
    }

    public function print(Request $request)
    { {
            // Validasi input
            $request->validate([
                'tahun' => 'required|numeric',
                'bulan' => 'required|numeric',
                'status' => 'nullable|string',
            ]);

            // Ambil data pengaduan berdasarkan filter yang diterima
            $query = Pengaduan::whereYear('created_at', $request->tahun)
                ->whereMonth('created_at', $request->bulan);

            if ($request->status) {
                $query->where('status', $request->status);
            }

            // Ambil data pengaduan
            $pengaduans = $query->get();

            // Cek apakah ada data pengaduan
            if ($pengaduans->isEmpty()) {
                // Jika tidak ada data, kirimkan pesan notifikasi
                return redirect()->back()->with('error', 'Tidak ada data pengaduan yang sesuai dengan filter yang dipilih.');
            }

            // Generate PDF dengan data pengaduan
            $pdf = PDF::loadView('backend.content.generatereport.print', compact('pengaduans'));

            // Set kertas PDF
            $pdf->setPaper('a4', 'landscape');

            // Stream atau download laporan
            return $pdf->stream('laporan_pengaduan.pdf');
        }
    }
}