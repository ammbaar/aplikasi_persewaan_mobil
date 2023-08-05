@extends('master')

@section('konten')

  <h3>Form Input Peminjaman Mobil</h3>
  <br>
  <form method="post" action="/peminjaman_mobil/insert">
    @csrf
    <div class="form-group">
      <label>Nomor Plat Mobil</label>
      <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
      <select name="id_mobil" class="form-control" required="">
        <option value="">-- Pilih Nomor Plat --</option>
        @foreach ($mobil as $id => $no_plat)
          <option value="{{ $id }}">{{ $no_plat }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Tanggal Mulai</label>
      <input type="date" name="tanggal_mulai" class="form-control" placeholder="Tanggal Mulai" required="">
    </div>
    <div class="form-group">
      <label>Tanggal Selesai</label>
      <input type="date" name="tanggal_selesai" class="form-control" placeholder="Tanggal Selesai" required="">
    </div>
    <div class="form-group text-right">
      <a href="/peminjaman_mobil" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </form>

@endsection