@extends('backend.main.index')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-black">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Masyarakat Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2" style="border-left: 5px solid #6A5ACD;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #6A5ACD;">
                                Masyarakat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{  App\Models\User::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x" style="color: #000000;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Laporan Masuk Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2" style="border-left: 5px solid #F6C3E5;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #F6C3E5;">
                                Laporan Masuk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{  App\Models\User::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-alt fa-2x" style="color: #000000;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Laporan Diterima Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2" style="border-left: 5px solid #FFD700;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #FFD700;">
                                Laporan Diterima</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        {{ App\Models\Pengaduan::where('status','Proses')->count()}}</div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x" style="color: #000000;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Laporan Ditolak Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2" style="border-left: 5px solid #32CD32;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #32CD32;">
                                Laporan Ditolak</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Pengaduan::where('status','Ditolak')->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times-circle fa-2x" style="color: #000000;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
