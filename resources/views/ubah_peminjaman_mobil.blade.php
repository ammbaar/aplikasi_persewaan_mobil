@extends('master')

@section('konten')

  <h3>Ubah Data Peminjaman Mobil</h3>
  <br>
  <form method="post" action="/peminjaman_mobil/update/{{ $peminjaman_mobil->id }}">
    @csrf
    {{ method_field('PUT') }}
    <input type="hidden" name="id_user" value="{{$peminjaman_mobil->id_user}}">
    <div class="form-group">
      <label>ID Mobil</label>
      <input type="text" name="id_mobil" value="{{$peminjaman_mobil->id_mobil}}" class="form-control" placeholder="ID Mobil" required="">
    </div>
    <div class="form-group">
      <label>Tanggal Mulai</label>
      <input type="date" name="tanggal_mulai" value="{{$peminjaman_mobil->tanggal_mulai}}" class="form-control" placeholder="Tanggal Mulai" required="">
    </div>
    <div class="form-group">
      <label>Tanggal Selesai</label>
      <input type="date" name="tanggal_selesai" value="{{$peminjaman_mobil->tanggal_selesai}}" class="form-control" placeholder="Tanggal Selesai" required="">
    </div>
    <div class="form-group text-right">
      <a href="/peminjaman_mobil" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </form>

@endsection