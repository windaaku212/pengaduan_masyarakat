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
                    <h6 class="m-0 font-weight-bold text-primary">Data Tanggapan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {{-- <a href="/tambahlaporan" class="btn btn-primary mb-3">Tambah</a> --}}
                        <table class="table table-bordered" id="table_pagination" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Nama Petugas</th>
                                    <th>Tanggal Tanggapan</th>
                                    <th>Isi Tanggapan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($pengaduans as $item)
                                    @foreach ($item->tanggapans as $tanggapan)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->judul_pengaduan }}</td>

                                            <!-- Nama Petugas (Jika ada yang menanggapi) -->
                                            <td>
                                                @if ($tanggapan->user)
                                                    {{ $tanggapan->user->name }}
                                                @else
                                                    <span>Data Petugas Tidak Tersedia</span>
                                                @endif
                                            </td>
                                            <!-- Isi Tanggapan -->
                                            <td>{{ $tanggapan->tanggal_tanggapan }}</td>
                                            <td>{{ $tanggapan->tanggapan }}</td>
                                            <td>
                                                <a href="/detailtanggapan/{{ $tanggapan->id }}"
                                                    class="btn btn-primary w-100 mb-1">Detail</a>
                                            </td>

                                        </tr>
                                    @endforeach
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
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('frontend.component.script')
</body>

</html>
