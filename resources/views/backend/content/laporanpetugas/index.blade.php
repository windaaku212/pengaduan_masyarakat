@extends('backend.main.pegawai')

@section('content')
    <div class="container-fluid">
        @if (session()->get('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif

        @if (session()->get('errors'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('errors') }}
            </div>
        @endif
        <h3 class="mt-4">Laporan</h3>

        <div class="card mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Laporan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Judul Pengaduan</th>
                                <th>Nama Pengaduan</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($pengaduans as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->judul_pengaduan }}</td>

                                    <!-- Lihat apa yang ada pada relasi 'user' -->
                                    <td>
                                        @if ($item->user)
                                            {{ $item->user->name }}
                                        @else
                                            <span>Data Pengguna Tidak Tersedia</span>
                                        @endif
                                    </td>

                                    <!-- Pengecekan relasi kategori -->
                                    <td>
                                        @if ($item->kategori)
                                            {{ $item->kategori->nama_kategori }}
                                        @else
                                            <span>Data Kategori Tidak Tersedia</span>
                                        @endif
                                    </td>

                                    <!-- Pengecekan relasi lokasi -->

                                    <td class="text-capitalize">
                                        @if ($item->status == 'Baru')
                                            <span class="badge bg-primary text-white">{{ $item->status }}</span>
                                        @endif
                                        @if ($item->status == 'Ditolak')
                                            <span class="badge bg-danger text-white">{{ $item->status }}</span>
                                        @endif
                                        @if ($item->status == 'Proses')
                                            <span class="badge bg-warning text-white">{{ $item->status }}</span>
                                        @endif
                                        @if ($item->status == 'Selesai')
                                            <span class="badge bg-success text-white">{{ $item->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/tanggapanpetugas/create/{{ $item->id }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- Delete -->
                                        <form action="" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <!-- Detail -->
                                        <a href="/pengaduanpetugas/show/{{ $item->id }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fas fa-list"></i>
                                        </a>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
