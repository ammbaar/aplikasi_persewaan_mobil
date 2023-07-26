@extends('master')

@section('konten')

  <h3>Ubah Data Peminjaman Mobil</h3>
  <br>
  @foreach($peminjaman_mobil as $m)
    <form method="post" action="{{route('update_peminjaman_mobil')}}">
      @csrf
      <input type="hidden" name="id" value="{{$m->id}}">
      <input type="hidden" name="id_user" value="{{$m->id_user}}">
      <div class="form-group">
        <label>ID Mobil</label>
        <input type="text" name="id_mobil" value="{{$m->id_mobil}}" class="form-control" placeholder="ID Mobil" required="">
      </div>
      <div class="form-group">
        <label>Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai" value="{{$m->tanggal_mulai}}" class="form-control" placeholder="Tanggal Mulai" required="">
      </div>
      <div class="form-group">
        <label>Tanggal Selesai</label>
        <input type="date" name="tanggal_selesai" value="{{$m->tanggal_selesai}}" class="form-control" placeholder="Tanggal Selesai" required="">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
      </div>
    </form>
  @endforeach

@endsection