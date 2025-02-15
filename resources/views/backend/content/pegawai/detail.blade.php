@extends('backend.main.index')

@section('content')
<div class="container-fluid">
    <h3 class="mt-4">Pegawai</h3>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pegawai</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-flex justify-content-end mt-3">
                </div>                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
    
                        <tr>
                            <th colspan="2"> ID DATA : {{ $user->id }}</th>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td>{{ $user->nik }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Jabatan</th>
                            <td>{{ $user->role }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{ $user->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>{{ $user->password }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $user->alamat }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ url()->previous() }}" class="btn btn-primary rounded-circle shadow-lg fixed bottom-5 right-200">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
    
    
</div>
@endsection
