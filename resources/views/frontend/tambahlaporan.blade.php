<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.component.head')
</head>

<body class="index-page">

@include('frontend.component.headerr')

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-700">
                <h5 class="text-bold" style="color: #333; font-weight: 600;">Formulir Pengaduan</h5>
                <p class="text-bold"></p>
                <div class="mb-4"></div>
                <div class="card-body">
                    <form action="/tambahlaporan/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <div class="form-group mb-3">
                            <label class="form-label">Judul Laporan</label>
                            <input type="text" class="form-control" name="judul_pengaduan"
                                placeholder="Masukkan Judul" value="{{ old('judul_pengaduan') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Isi Laporan</label>
                            <textarea class="form-control" name="isi_pengaduan" placeholder="Masukkan Isi Laporan" required rows="5">{{ old('isi_pengaduan') }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="kategori_id" class="form-control">
                                <option>-- Pilih Kategori --</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('kategori_id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Tanggal Laporan</label>
                            <input type="date" class="form-control" name="tanggal_pengaduan" 
                                   value="{{ old('tanggal_pengaduan') }}" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label">Lampiran (Foto)</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" name="kirim" class="btn btn-primary">Ajukan Laporan ></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




@include('frontend.component.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

@include('frontend.component.script')
</body>

</html>