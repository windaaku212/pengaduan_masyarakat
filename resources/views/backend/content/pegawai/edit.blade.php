@extends('backend.main.index')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Masyarakat</h6>
            </div>
            <div class="card-body">
                <form action="/pegawai/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nik">Nik</label>
                        <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukan NIK"
                            value="{{ $user->nik }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Masukan Nama Lengkap" value="{{ $user->name }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="role">Jabatan</label>
                        <select class="form-control" id="role" name="role">
                            <option value="">Pilih Jabatan</option>
                            <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin
                            </option>
                            <option value="Petugas" {{ $user->role == 'Petugas' ? 'selected' : '' }}>Petugas
                            </option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ $user->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi">Alamat</label>
                        <textarea class="form-control" id="deskripsi" name="alamat" placeholder="Masukan Alamat">{{ $user->alamat }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="no_telp">No. Telp</label>
                        <input type="number" class="form-control" id="no_telp" name="no_telp"
                            placeholder="Masukan No. Telp" value="{{ $user->no_telp }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto"
                            value="{{ $user->foto }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email"
                            value="{{ $user->email }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukan Password" value="{{ $user->password }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
@endsection

    <!-- /.container-fluid -->
