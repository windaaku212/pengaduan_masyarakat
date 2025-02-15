@extends('backend.main.index')
@section('content')
    <div class="container-fluid">
        <!-- backend.content.generatereport.index.blade.php -->

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Print Laporan</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('generatereport.print') }}" method="POST" target="_blank">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="tahun">Pilih Tahun</label>
                        <select class="form-control" id="tahun" name="tahun">
                            <option value="">Pilih Tahun</option>
                            @for ($i = date('Y'); $i >= 2020; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="bulan">Pilih Bulan</label>
                        <select class="form-control" id="bulan" name="bulan">
                            <option value="">Pilih Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="status">Pilih Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Pilih Status</option>
                            <option value="Baru">Baru</option>
                            <option value="Ditolak">Ditolak</option>
                            <option value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Print Laporan</button>
                </form>
            </div>
        </div>

    </div>
@endsection