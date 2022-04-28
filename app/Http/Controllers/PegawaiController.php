<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDO;

class PegawaiController extends Controller
{

    public function index(){
        //mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->paginate(10);

        //mengirim daa ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah(){
        return view('tambah');
    }

    //kalau untuk tangkap data tambahkan parameter di functionnya
    public function store(Request $request){
        DB::table('pegawai')->insert([
            'nama'=>$request->nama,
            'jabatan'=>$request->jabatan,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat,
        ]);

        return redirect('/pegawai');
    }

    //untuk ambil data dan passing ke halaman edit
    public function edit($id){
        $pegawai = DB::table('pegawai')->where('id', $id)->get();

        return view('edit', ['pegawai' => $pegawai]);
    }
    //setelah diedit masuk ke bagian simpan
    public function update(Request $request){
        DB::table('pegawai')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);
        return redirect('/pegawai');
    }

    //function untuk hapus data
    public function hapus($id){
        DB::table('pegawai')->where('id', $id)->delete();

        return redirect('/pegawai');
    }

    //function untuk cari data
    public function cari(Request $request){

        //menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari table pegawai sesuai key
        $pegawai = DB::table('pegawai')->where('nama','like',"%".$cari."%")->orWhere('id', 'like',"%".$cari."%")->orWhere('jabatan','like',"%".$cari."%")->paginate();
        //mengirim data ke view index
        return view('index', ['pegawai' =>$pegawai]);
    }






    //===========================================
    // //menangkap data melalui URL contoh : google.com/pegawai/febri
    // public function index($nama){
    //     return $nama;
    // }

    // //untuk menuju ke halaman formulir.blade.php
    // //setelah itu isi data, setelah isi data masuk ke function proses untuk di tampilkan datanya
    // public function formulir(){
    //     return view('formulir');
    // }

    // public function proses(Request $request){
    //     $nama = $request->input('nama');
    //     $alamat = $request->input('alamat');
    //     return "Nama : ".$nama.", Alamat : ".$alamat;
    // }
}
