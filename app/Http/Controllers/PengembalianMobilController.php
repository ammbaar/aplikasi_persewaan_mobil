<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanMobil;
use App\Models\Mobil;

class PengembalianMobilController extends Controller
{
    public function pengembalian_mobil()
    {
        $data = PeminjamanMobil::join('users', 'peminjaman_mobil.id_user', '=', 'users.id')
                ->join('mobil', 'peminjaman_mobil.id_mobil', '=', 'mobil.id')
                ->where('peminjaman_mobil.status', '!=', 'Sewa')
                ->orderBy('peminjaman_mobil.id', 'desc')
                ->get(array(
                    'peminjaman_mobil.id',
                    'nama',
                    'no_plat',
                    'durasi',
                    'biaya'
                ));

        return view('pengembalian_mobil', ['pengembalian_mobil' => $data]);
    }

    public function form_pengembalian_mobil($id)
    {
        $data = PeminjamanMobil::find($id);
        $list = Mobil::where('status', 'Disewa')->orWhere('id', $data->id_mobil)->pluck('no_plat', 'id');

        return view('form_pengembalian_mobil', ['pengembalian_mobil' => $data, 'list' => $list]);
    }

    public function update_pengembalian_mobil($id, Request $request)
    {
        $pinjam = PeminjamanMobil::find($id);
        $pinjam->status = 'Kembali';
        $pinjam->save();

        $mobil = Mobil::find($pinjam->id_mobil);
        $mobil->status = 'Tersedia';
        $mobil->save();

        return redirect('/peminjaman_mobil');
    }
}
