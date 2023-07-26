@extends('master')

@section('konten')

  <h3>Data Peminjaman Mobil</h3>
  <br>
  <a class="btn btn-success" href="{{route('tambah_peminjaman_mobil')}}"><i class="fa fa-plus"></i> Tambah Peminjaman Mobil</a><br><br>
  <table class="table table-bordered table-hover">
    <tr>
      <th>ID</th>
      <th>Pengguna</th>
      <th>Plat Mobil</th>
      <th>Tanggal Mulai</th>
      <th>Tanggal Selesai</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
    @foreach($peminjaman_mobil as $m) 
    <tr>
      <td>{{$m->id}}</td>
      <td>{{$m->nama}}</td>
      <td>{{$m->no_plat}}</td>
      <td>{{$m->tanggal_mulai}}</td>
      <td>{{$m->tanggal_selesai}}</td>
      <td>{{$m->status}}</td>
      <td><a href="/peminjaman_mobil/ubah/{{$m->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a></td>
    </tr>
    @endforeach
  </table>

@endsection