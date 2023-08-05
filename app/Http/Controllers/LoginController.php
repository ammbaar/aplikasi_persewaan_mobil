<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/home');
        }else{
            Session::flash('error', 'Username atau Password salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function akun($id)
    {
        $akun = User::find($id);

        return view('akun', ['akun' => $akun]);
    }

    public function update_akun($id, Request $request)
    {
        $akun = User::find($id);
        $akun->nama = $request->nama;
        $akun->alamat = $request->alamat;
        $akun->no_telp = $request->no_telp;
        $akun->no_sim = $request->no_sim;
        $akun->save();

        $data = User::find($id);

        Session::flash('message', 'Update data berhasil');
        return view('akun', ['akun' => $data]);
    }
}
