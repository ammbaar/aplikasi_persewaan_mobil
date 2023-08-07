@extends('master')

@section('konten')

  <h3>Form Pengembalian Mobil</h3>
  <br>
  <form method="post" action="/pengembalian_mobil/update/{{ $pengembalian_mobil->id }}" autocomplete="off">
    @csrf
    {{ method_field('PUT') }}
    <input type="hidden" name="id_user" value="{{$pengembalian_mobil->id_user}}">
    <div class="form-group">
      <label>Nomor Plat Mobil</label>
      <select name="id_mobil" class="form-control" disabled>
        <option value="">-- Pilih Nomor Plat --</option>
        @foreach($list as $id => $no_plat)
          <option value="{{ $id }}" {{ $id == $pengembalian_mobil->id_mobil ? 'selected' : '' }}>{{ $no_plat }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Tanggal Mulai</label>
      <input type="date" name="tanggal_mulai" value="{{$pengembalian_mobil->tanggal_mulai}}" class="form-control" placeholder="Tanggal Mulai" disabled>
    </div>
    <div class="form-group">
      <label>Tanggal Selesai</label>
      <input type="date" name="tanggal_selesai" value="{{$pengembalian_mobil->tanggal_selesai}}" class="form-control" placeholder="Tanggal Selesai" disabled>
    </div>
    <div class="form-group">
      <label>Durasi Sewa (Hari)</label>
      <input name="durasi" value="{{$pengembalian_mobil->durasi}}" class="form-control" placeholder="Durasi Sewa" disabled>
    </div>
    <div class="form-group">
      <label>Jumlah Biaya Sewa</label>
      <input name="biaya" value="{{$pengembalian_mobil->biaya}}" class="form-control" placeholder="Jumlah Biaya Sewa" disabled>
    </div>
    <div class="form-group text-right">
      <a href="/peminjaman_mobil" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
      <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </form>

@endsection