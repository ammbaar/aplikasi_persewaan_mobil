@extends('master')

@section('konten')

  <h3>Data Akun</h3>
  <br>
  @foreach($akun as $a)
    <form method="post" action="{{route('update_akun')}}">
      @csrf
      <input type="hidden" name="id" value="{{$a->id}}">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{$a->nama}}" class="form-control" placeholder="Nama" required="">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat" style="resize: none;" required="">{{$a->alamat}}</textarea>
      </div>
      <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" name="no_telp" value="{{$a->no_telp}}" class="form-control" placeholder="Nomor Telepon" required="">
      </div>
      <div class="form-group">
        <label>Nomor SIM</label>
        <input type="text" name="no_sim" value="{{$a->no_sim}}" class="form-control" placeholder="Nomor SIM" required="">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  @endforeach

@endsection