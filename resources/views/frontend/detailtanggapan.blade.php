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
                                    <th>ID Tanggapan</th>
                                    <td>{{ $tanggapan->id }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <td>{{ $tanggapan->created_at->format('d F Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Petugas</th>
                                    <td>{{ $tanggapan->user->name ?? 'Data Petugas Tidak Tersedia' }}</td>
                                </tr>
                                <tr>
                                    <th>Kategori Pengaduan</th>
                                    <td>{{ $tanggapan->pengaduan->kategori->nama_kategori ?? 'Kategori Tidak Tersedia' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Lokasi Pengaduan</th>
                                    <td>{{ $tanggapan->pengaduan->lokasi->nama_lokasi ?? 'Lokasi Tidak Tersedia' }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Tanggapan</th>
                                    <td>{{ $tanggapan->tanggal_tanggapan }}</td>
                                </tr>
                                <tr>
                                    <th>Isi Tanggapan</th>
                                    <td>{{ $tanggapan->tanggapan }}</td>
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
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('frontend.component.script')
</body>

</html>
