<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanMobil;

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
        return view('tambah_peminjaman_mobil');
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

        return redirect('/peminjaman_mobil');
    }

    public function ubah_peminjaman_mobil($id)
    {
        $mobil = PeminjamanMobil::find($id);

        return view('ubah_peminjaman_mobil', ['peminjaman_mobil' => $mobil]);
    }

    public function update_peminjaman_mobil($id, Request $request)
    {
        $mobil = PeminjamanMobil::find($id);
        $mobil->id_user = $request->id_user;
        $mobil->id_mobil = $request->id_mobil;
        $mobil->tanggal_mulai = $request->tanggal_mulai;
        $mobil->tanggal_selesai = $request->tanggal_selesai;
        $mobil->status = 'Sewa';
        $mobil->save();

        return redirect('/peminjaman_mobil');
    }
}
