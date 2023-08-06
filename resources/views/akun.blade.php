@extends('master')

@section('konten')

  <h3>Data Akun</h3>
  <br>
  @if(session('message'))
  <div class="alert alert-success">
    {{session('message')}}
  </div>
  @endif
  <form method="post" action="/akun/update/{{ $akun->id }}" autocomplete="off">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" value="{{$akun->nama}}" class="form-control" placeholder="Nama" required="">
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat" style="resize: none;" required="">{{$akun->alamat}}</textarea>
    </div>
    <div class="form-group">
      <label>Nomor Telepon</label>
      <input type="text" name="no_telp" value="{{$akun->no_telp}}" class="form-control" placeholder="Nomor Telepon" required="">
    </div>
    <div class="form-group">
      <label>Nomor SIM</label>
      <input type="text" name="no_sim" value="{{$akun->no_sim}}" class="form-control" placeholder="Nomor SIM" required="">
    </div>
    <div class="form-group text-right">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
    </div>
  </form>

@endsection