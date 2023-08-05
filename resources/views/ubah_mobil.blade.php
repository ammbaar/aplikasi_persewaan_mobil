@extends('master')

@section('konten')

  <h3>Ubah Data Mobil</h3>
  <br>
  <form method="post" action="/mobil/update/{{ $mobil->id }}">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
      <label>Merk</label>
      <input type="text" name="merk" value="{{$mobil->merk}}" class="form-control" placeholder="Merk" required="">
    </div>
    <div class="form-group">
      <label>Model</label>
      <input type="text" name="model" value="{{$mobil->model}}" class="form-control" placeholder="Model" required="">
    </div>
    <div class="form-group">
      <label>Nomor Plat</label>
      <input type="text" name="no_plat" value="{{$mobil->no_plat}}" class="form-control" placeholder="Nomor Plat" required="">
    </div>
    <div class="form-group">
      <label>Tarif Sewa Per Hari</label>
      <input type="text" name="tarif" value="{{$mobil->tarif}}" class="form-control" placeholder="Tarif Sewa Per Hari" required="">
    </div>
    <div class="form-group text-right">
      <a href="/mobil" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </form>

@endsection