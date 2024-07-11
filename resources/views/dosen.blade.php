@extends('index')

@section('title', 'Daftar Dosen')

@section('content')
  <section id="daftar-tamu" class="daftar-tamu">
    <div class="container">
      <div class="section-title">
        <h1>Daftar Dosen</h1>
        <p>Berikut adalah daftar dosen sebagai bentuk UTS dari mata kuliah Pemrograman Web 2</p>
      </div>
      
      <div class="dosen-table table-responsive">
        <table class="table table-striped">
          <thead class="table-dark">
            <tr class="text-center">
              <th>No.</th>
              <th>NIDN</th>
              <th>Nama</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>No. Telepon</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dosens as $dosen)
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $dosen->nidn }}</td>
                  <td>{{ $dosen->nama_dosen }}</td>
                  <td class="text-center">{{ $dosen->tempat_lahir }}</td>
                  <td class="text-center">{{ $dosen->tanggal_lahir }}</td>
                  <td class="text-center">{{ $dosen->telepon }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <div class="">
          {{ $dosens->links('pagination::bootstrap-4') }}
        </div>
      </div>
    </div>
  </section>
@endsection