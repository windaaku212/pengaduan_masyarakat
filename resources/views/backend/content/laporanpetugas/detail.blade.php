@extends('backend.main.pegawai')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4">Laporan</h3>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Laporan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3"><i
                                class="fas fa-arrow-left mr-1"></i>Kembali</a>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <th colspan="2"> ID DATA : {{ $pengaduan->id }}</th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td class="text-capitalize">{{ $pengaduan->status }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ $pengaduan->tanggal_pengaduan }}</td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $pengaduan->user ? $pengaduan->user->name : 'Data Pengguna Tidak Tersedia' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td>{{ $pengaduan->kategori ? $pengaduan->kategori->nama_kategori : 'Data Kategori Tidak Tersedia' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Lampiran</th>
                                    <td>
                                        @if ($pengaduan->foto)
                                            <img src="{{ Storage::url($pengaduan->foto) }}" alt="Lampiran"
                                                style="max-width: 200px;">
                                        @else
                                            <p>Tidak ada lampiran</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Isi Pengaduan</th>
                                    <td>{{ $pengaduan->isi_pengaduan }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Form Update Status -->
                        <form action="/pengaduanpetugas/update/{{ $pengaduan->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Menambahkan method PUT -->

                            {{-- Menyembunyikan input judul_pengaduan --}}
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="judul_pengaduan" name="judul_pengaduan"
                                    value="{{ $pengaduan->judul_pengaduan }}" hidden>
                            </div>

                            {{-- Menyembunyikan textarea isi_pengaduan --}}
                            <div class="form-group mb-3">
                                <textarea class="form-control" id="isi_pengaduan" name="isi_pengaduan" hidden>{{ $pengaduan->isi_pengaduan }}</textarea>
                            </div>

                            {{-- Menyembunyikan input lampiran --}}
                            <div class="form-group mb-3">
                                <input type="file" class="form-control" id="lampiran" name="lampiran" hidden>
                            </div>

                            {{-- Menampilkan pilihan status --}}
                            <div class="form-group mb-3">
                                <label for="status" class="form-label">Ubah Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Proses" @selected($pengaduan->status == 'Proses')>Proses</option>
                                    <option value="Selesai" @selected($pengaduan->status == 'Selesai')>Selesai</option>
                                    <option value="Ditolak" @selected($pengaduan->status == 'Ditolak')>Ditolak</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Update Status</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
