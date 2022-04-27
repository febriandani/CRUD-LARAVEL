<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //menangkap data melalui URL contoh : google.com/pegawai/febri
    public function index($nama){
        return $nama;
    }

    //untuk menuju ke halaman formulir.blade.php
    //setelah itu isi data, setelah isi data masuk ke function proses untuk di tampilkan datanya
    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
