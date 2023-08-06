<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanMobil;
use App\Models\Mobil;

class PeminjamanMobilController extends Controller
{
    public function peminjaman_mobil()
    {
        $mobil = PeminjamanMobil::join('users', 'peminjaman_mobil.id_user', '=', 'users.id')
                ->join('mobil', 'peminjaman_mobil.id_mobil', '=', 'mobil.id')
                ->orderBy('peminjaman_mobil.id', 'desc')
                ->get(array(
                    'peminjaman_mobil.id',
                    'nama',
                    'no_plat',
                    'tanggal_mulai',
                    'tanggal_selesai',
                    'peminjaman_mobil.status'
                ));

        return view('peminjaman_mobil', ['peminjaman_mobil' => $mobil]);
    }

    public function tambah_peminjaman_mobil()
    {
        $list = Mobil::where('status', 'Tersedia')->pluck('no_plat', 'id');

        return view('tambah_peminjaman_mobil', ['list' => $list]);
    }

    public function insert_peminjaman_mobil(Request $request)
    {
        PeminjamanMobil::create([
            'id_user' => $request->id_user,
            'id_mobil' => $request->id_mobil,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status' => 'Sewa'
        ]);

        $mobil = Mobil::find($request->id_mobil);
        $mobil->status = 'Disewa';
        $mobil->save();

        return redirect('/peminjaman_mobil');
    }

    public function ubah_peminjaman_mobil($id)
    {
        $pinjam = PeminjamanMobil::find($id);
        $list = Mobil::where('status', 'Tersedia')->orWhere('id', $pinjam->id_mobil)->pluck('no_plat', 'id');

        return view('ubah_peminjaman_mobil', ['peminjaman_mobil' => $pinjam, 'list' => $list]);
    }

    public function update_peminjaman_mobil($id, Request $request)
    {
        $pinjam = PeminjamanMobil::find($id);
        $mobil_awal = Mobil::find($pinjam->id_mobil);
        $mobil_awal->status = 'Tersedia';
        $mobil_awal->save();

        $pinjam->id_user = $request->id_user;
        $pinjam->id_mobil = $request->id_mobil;
        $pinjam->tanggal_mulai = $request->tanggal_mulai;
        $pinjam->tanggal_selesai = $request->tanggal_selesai;
        $pinjam->status = 'Sewa';
        $pinjam->save();

        $mobil = Mobil::find($request->id_mobil);
        $mobil->status = 'Disewa';
        $mobil->save();

        return redirect('/peminjaman_mobil');
    }
}
