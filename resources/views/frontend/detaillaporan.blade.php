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
                                    @if($pengaduan->foto)
                          
                                    <img src="{{ Storage::url($pengaduan->foto) }}" alt="Lampiran" style="max-width: 200px;">
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








