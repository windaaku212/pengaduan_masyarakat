@extends('backend.main.index')

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
        <h3 class="mt-4">Pegawai</h3>

        <div class="card mt-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Data Laporan</h5>
                <a href="" class="btn btn-secondary btn-sm">
                    <i class="fas fa-plus-circle"></i> Add Data Pegawai
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-white">
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td class="text-center">
                                        <!-- Edit -->
                                        <a href="/pegawaiedit" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- Delete -->
                                        {{-- <form action="" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form> --}}
                                        <!-- Detail -->
                                        {{-- <a href="{{ route('detailpegawai.show', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-list"></i>
                                </a> --}}
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





