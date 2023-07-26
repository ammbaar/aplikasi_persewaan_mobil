<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianMobilController extends Controller
{
    public function pengembalian_mobil()
    {
        return view('pengembalian_mobil');
    }
}
