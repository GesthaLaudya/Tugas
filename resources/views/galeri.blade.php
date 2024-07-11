@foreach ($galeris as $galeri)
  {{ $galeri->judul }}
  <img src="{{ $galeri->gambar }}" alt=""> 
  {{ $galeri->deskripsi }}
@endforeach