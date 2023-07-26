@extends('master')

@section('konten')

  <h3>Data Mobil</h3>
  <br>
  <a class="btn btn-success" href="{{route('tambah_mobil')}}"><i class="fa fa-plus"></i> Tambah Mobil</a><br><br>
  <table class="table table-bordered table-hover">
    <tr>
      <th>ID</th>
      <th>Merk</th>
      <th>Model</th>
      <th>Nomor Plat</th>
      <th>Tarif</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
    @foreach($mobil as $m) 
    <tr>
      <td>{{$m->id}}</td>
      <td>{{$m->merk}}</td>
      <td>{{$m->model}}</td>
      <td>{{$m->no_plat}}</td>
      <td>{{$m->tarif}}</td>
      <td>{{$m->status}}</td>
      <td><a href="/mobil/ubah/{{$m->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a></td>
    </tr>
    @endforeach
  </table>

@endsection