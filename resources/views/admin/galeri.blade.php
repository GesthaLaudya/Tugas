@extends('admin.indexadmin')

@section('content')
    <section class="galeri">
        <div class="container">
            <div class="section-title">
                <h1>Galeri</h1>
                <a class="btn btn-success" href="{{ route('admin.galeri.input') }}"><i class="fas fa-add"></i> Tambah
                    Gambar</a>
            </div>

            <div class="row">
                @foreach ($galeris as $galeri)
                    <div class="col-lg-4 col-md-6">
                        <div class="text-center mb-3">
                            <div class="img-container mb-3">
                                <img src="{{ Storage::url($galeri->gambar) }}"
                                    class="img-fluid object-fit-none border rounded" alt="">
                            </div>
                            <h3>{{ $galeri->judul }}</h3>
                            <p>{{ $galeri->deskripsi }}</p>
                            <a href="{{ route('admin.galeri.edit', ['id' => $galeri->id]) }}" class="btn btn-primary"><i
                                    class="fas fa-pencil"></i>
                                Edit</a>
                            <a href="{{ route('admin.galeri.delete', ['id' => $galeri->id]) }}" class="btn btn-danger"
                                onclick="return confirm('Apakah kamu ingin menghapus data ini?')">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
@endsection
