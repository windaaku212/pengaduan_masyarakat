@extends('backend.main.index')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kirim Tanggapan</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('tanggapan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="pengaduan_id">Pengaduan</label>
                        <select class="form-control" id="pengaduan_id" name="pengaduan_id" required>
                            <option value="">Pilih Pengaduan</option>
                            @foreach ($pengaduans as $pengaduan)
                                <option value="{{ $pengaduan->id }}"
                                    {{ old('pengaduan_id') == $pengaduan->id ? 'selected' : '' }}>
                                    {{ $pengaduan->judul_pengaduan }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Tanggal Laporan</label>
                        <input type="date" class="form-control" name="tanggal_pengaduan"
                            value="{{ old('tanggal_pengaduan') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="tanggapan">Tanggapan</label>
                        <textarea class="form-control" id="tanggapan" name="tanggapan" placeholder="Masukkan Tanggapan" rows="5" required>{{ old('tanggapan') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Kirim Tanggapan</button>
                </form>


            </div>
        </div>
    </div>
@endsection
