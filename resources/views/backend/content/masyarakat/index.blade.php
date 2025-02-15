@extends('backend.main.index')

@section('content')
<div class="container-fluid">
    <h3 class="mt-4">Masyarakat</h3>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
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
                        @foreach($user as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td class="text-center">
                                <a href="{{ route('userdetail.show', $item->id) }}" class="btn btn-primary btn-sm">
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
