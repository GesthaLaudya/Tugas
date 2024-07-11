@extends('admin.indexadmin')

@section('content')
    <section class="input-galeri d-flex justify-content-center align-items-center">
        <div class="container w-50 vh-50">
            <h1>Tambah Gambar ke Galeri</h1>
            <p>Silahkan isi informasi dari gambar yang ingin ditambahkan.</p>
            <hr>
            <form action="{{ route('admin.galeri.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="gambar" class="col-sm-3 col-form-label">File gambar</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-3 col-form-label">Judul gambar</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="judul" name="judul"
                            placeholder="ketikkan judul gambar di sini...">
                    </div>
                </div>
                <div class="row mb-5">
                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="tambahkan deskripsi gambar di sini..."></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-evenly">
                    <a href="{{ route('admin.galeri.index') }}" class="btn btn-light">Batal</a>
                    <button type="submit" class="btn btn-success">Tambah +</button>
                </div>
            </form>
        </div>
    </section>
@endsection
