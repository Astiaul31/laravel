<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;

class SiswaController extends Controller
{
    public function tampil()
    {
        //menampilkan semua data dari model Siswa yang bersumber
        //dari tabel / migration siswas
        //atau sama dengan query sql
        //select * ftom siswas
        $a = Siswa::all();
        return view('siswa.index', ['siswa' => $a]);
    }
}
