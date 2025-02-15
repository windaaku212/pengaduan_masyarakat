<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.component.head')
</head>

<body class="index-page">

@include('frontend.component.headerr')

<section>
  <div class="d-flex justify-content-center align-items-center" style="min-height: 300px;">
    <div class="card shadow mb-4" style="width: 100%; max-width: 1200px;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="/tambahlaporan" class="btn btn-primary mb-3">Tambah</a>
                <table class="table table-bordered" id="table_pagination" width="100%" cellspacing="0">
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
                                  <a href="{{ route('laporan.detail', ['id' => $item->id]) }}" 
                                     class="btn btn-primary w-100 mb-1">
                                     Detail
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
</section>

@include('frontend.component.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

@include('frontend.component.script')
</body>

</html>