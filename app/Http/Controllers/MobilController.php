<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function mobil()
    {
        $mobil = Mobil::select('*')
                ->get();

        return view('mobil', ['mobil' => $mobil]);
    }

    public function tambah_mobil()
    {
        return view('tambah_mobil');
    }

    public function insert_mobil(Request $request)
    {
        $mobil = Mobil::create([
            'merk' => $request->merk,
            'model' => $request->model,
            'no_plat' => $request->no_plat,
            'tarif' => $request->tarif,
            'status' => 'Tersedia'
        ]);

        return redirect()->route('mobil');
    }

    public function ubah_mobil($id)
    {
        $mobil = Mobil::select('*')
                ->where('id', $id)
                ->get();

        return view('ubah_mobil', ['mobil' => $mobil]);
    }

    public function update_mobil(Request $request)
    {
        $mobil = Mobil::where('id', $request->id)
                ->update([
                    'merk' => $request->merk,
                    'model' => $request->model,
                    'no_plat' => $request->no_plat,
                    'tarif' => $request->tarif
                ]);

        return redirect()->route('mobil');
    }

    public function dropdown()
    {
        $mobil = Mobil::pluck('no_plat', 'id');

        return view('tambah_peminjaman_mobil', [
            'mobil' => $mobil,
        ]);
    }
}
