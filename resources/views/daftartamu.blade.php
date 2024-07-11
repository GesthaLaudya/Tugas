@extends('index')

@section('title', 'Daftar Tamu')

@section('content')
  <section id="daftar-tamu" class="daftar-tamu">
    <div class="container">
      <div class="section-title">
        <h1>Daftar Tamu</h1>
        <p>Berikut ini adalah bukutamu untuk kamu yang berkunjung ke website ini.</p>
      </div>
      
      <div class="guest-table table-responsive">
        <table class="table table-striped">
          <thead class="table-dark">
            <tr class="text-center">
              <th>No.</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($daftarTamus as $daftarTamu)
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $daftarTamu->name }}</td>
                  <td>{{ $daftarTamu->email }}</td>
                  <td>{{ $daftarTamu->phone }}</td>
                  <td>{{ $daftarTamu->keterangan }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <div class="">
          {{ $daftarTamus->links('pagination::bootstrap-4') }}
        </div>
      </div>
    </div>
  </section>
@endsection