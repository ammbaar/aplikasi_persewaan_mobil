@extends('master')

@section('konten')

  <h3>Ubah Data Mobil</h3>
  <br>
  @foreach($mobil as $m)
    <form method="post" action="{{route('update_mobil')}}">
      @csrf
      <input type="hidden" name="id" value="{{$m->id}}">
      <div class="form-group">
        <label>Merk</label>
        <input type="text" name="merk" value="{{$m->merk}}" class="form-control" placeholder="Merk" required="">
      </div>
      <div class="form-group">
        <label>Model</label>
        <input type="text" name="model" value="{{$m->model}}" class="form-control" placeholder="Model" required="">
      </div>
      <div class="form-group">
        <label>Nomor Plat</label>
        <input type="text" name="no_plat" value="{{$m->no_plat}}" class="form-control" placeholder="Nomor Plat" required="">
      </div>
      <div class="form-group">
        <label>Tarif Sewa Per Hari</label>
        <input type="text" name="tarif" value="{{$m->tarif}}" class="form-control" placeholder="Tarif Sewa Per Hari" required="">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
      </div>
    </form>
  @endforeach

@endsection