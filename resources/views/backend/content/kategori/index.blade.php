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
        <h3 class="mt-4">Kategori</h3>

        <div class="card mt-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Data Kategori</h5>
                <a href="" class="btn btn-secondary btn-sm">
                    <i class="fas fa-plus-circle"></i> Add Data Kategori
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori Laporan</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                  $no = 1;
                            @endphp
                            @foreach ($kategori as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->nama_kategori }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>
                                {{-- <!-- Edit -->
                                <a href="" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- Delete -->
                                <form action="" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form> --}}
                                <!-- Detail -->
                                <a href="" class="btn btn-primary btn-sm">
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



















