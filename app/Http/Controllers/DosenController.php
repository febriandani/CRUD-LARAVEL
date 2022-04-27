<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Muhammad febri andani";
        $matkul = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view('biodata',['nama' =>$nama, 'matkul' => $matkul]);
    }
}
