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
Route::get('about', function(){
    return '<h1>Hello</h1>'
    .'<br>Selamat datang di webapp saya'
    .'<br>Laravel,emang keren';
});
Route::get('profile', function(){
    $nama ="Maudy";
    return "Nama saya adalah <b>$nama</b>";
});

//route parameter
Route::get('post/{id}',function($a){
return "Halaman post ke-$a";
});

Route::get('biodata/{nama}/{umur}/{alamat}',function($a,$b,$c){
    return "Biodata Saya<br>"
    . "<br>Nama Saya : $a"
    ."<br>Umur Saya : $b tahun"
    ."<br>Alamat Saya : $c";
    });

    //route optional parameter
    Route::get('page/{page?}',function($hal=1){
        return "Halaman <b>$hal</b>";
    });


    Route::get('pesan/{makan?}/{minum?}/{cemilan?}', function ($makan = null, $minum = null, $cemilan = null) {
        if ($makan == null && $minum == null && $cemilan == null){
            $pesan = "Anda tidak memesan, silahkan pulang!";
        }
        if ($makan != null ){
            $pesan = "Anda Memesan<br>"
                . "<br>Makanan : <b>$makan</b>";
        }if ($makan != null && $minum != null ){
            $pesan = "Anda Memesan<br>"
                . "<br>Makanan : <b>$makan</b>"
                . "<br>Minuman : <b>$minum</b>";
        }if ($makan != null && $minum != null && $cemilan != null ){
            $pesan = "Anda Memesan <br>"
                . "<br>Makanan : <b>$makan</b>"
                . "<br>Minuman : <b>$minum</b>"
                . "<br>Cemilan : <b>$cemilan</b>";
        }
        return $pesan;
    });


    