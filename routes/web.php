<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman-2', function () {
    return ('halaman 2');
});

Route::get('/halaman-3/profile', function () {
    return ('halaman profile 3');
});

Route::get('/halaman/{nama}/jenis-kelamin/{jk}', function ($nama,$jk) {
    return ('halaman profile  ' .$nama. ' dengan jenis kelamin : ' .$jk);
});

Route::get('/halaman/{nama?}', function ($nama = 'data belum di isi') {
    return ('halaman profile  ' .$nama);
});

// Route::get('profile', function () {
//     return view('profile');
// });

Route::get('latihan/{nama}', function ($nama) {
    return view('latihan', compact('nama',));
});

Route::get('pesan/{menu?}', function ($a = "Silahkan Masukan Pesanan") {
    return view('pages.pesan', compact('a',));
});

Route::get('latihan1/{makanan?}/{minuman?}/{ukuran?}', function ($a = "Silahkan pesan", $b = "Silahkan pesan", $c = "Silahkan pesan") {
    return view('pages.latihan1', compact('a','b','c'));
});

Route::get('hallo', 'LatihanController@hallo');
Route::get('profile', 'LatihanController@profile');
Route::get('about/{perkalian}-{nama}', 'LatihanController@facebook');
Route::get('siswa', 'LatihanController@siswa');
Route::get('beratbadan/{berat}/{tinggi}', 'LatihanController@beratbadan');
Route::get('kampus', 'LatihanController@kampus');
Route::get('mahasiswa', 'LatihanController@mahasiswa');
Route::get('nilai', 'LatihanController@nilai');
Route::get('toko', 'LatihanController@toko');
Route::get('siswa', 'SiswaController@tampil');

