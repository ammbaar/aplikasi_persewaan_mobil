<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function mobil()
    {
        $mobil = Mobil::all();

        return view('mobil', ['mobil' => $mobil]);
    }

    public function tambah_mobil()
    {
        return view('tambah_mobil');
    }

    public function insert_mobil(Request $request)
    {
        Mobil::create([
            'merk' => $request->merk,
            'model' => $request->model,
            'no_plat' => $request->no_plat,
            'tarif' => $request->tarif,
            'status' => 'Tersedia'
        ]);

        return redirect('/mobil');
    }

    public function ubah_mobil($id)
    {
        $mobil = Mobil::find($id);

        return view('ubah_mobil', ['mobil' => $mobil]);
    }

    public function update_mobil($id, Request $request)
    {
        $mobil = Mobil::find($id);
        $mobil->merk = $request->merk;
        $mobil->model = $request->model;
        $mobil->no_plat = $request->no_plat;
        $mobil->tarif = $request->tarif;
        $mobil->save();

        return redirect('/mobil');
    }
}
