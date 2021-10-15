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
// Route::get('about', function(){
//     return '<h1>Hello</h1>'
//     .'<br>Selamat datang di webapp saya'
//     .'<br>Laravel,emang keren';
// });

Route::get('about', function(){
    return view ('tentang');
});

Route::get('profile', function(){
    $nama ="Maudy";
    return "Nama saya adalah <b>$nama</b>";
});

Route:: get('biodata', function(){
    $nama="Maudy Meilisa<br>";
    $umur="17 th";
    $alamat="Inhoftank";
    $sekolah="SMK Assalaam";
    $kelas="XII RPL 1";
    $hobi="Jalan-jalan";
    return view ('biodata',compact('nama','umur','alamat','sekolah','kelas','hobi'));
});
//route parameter
// Route::get('post/{id}',function($a){
// return "Halaman post ke-$a";
// });

Route::get('post/{id}',function($a){
    return view ('post',['posting' => $a]);

    });

Route::get('bio/{nama}/{umur}/{alamat}',function($nama,$umur,$alamat){
    return view ('bio',compact ('nama','umur','alamat'));


    // . "<br>Nama Saya : $a"
    // ."<br>Umur Saya : $b tahun"
    // ."<br>Alamat Saya : $c";
    });

Route ::get('blog',function(){
    $posts = [
        ['id'=>1,'title'=>'Lorem Ipsum 1','content'=> 'Content Pertama'],
        ['id'=>2,'title'=>'Lorem Ipsum 2','content'=> 'Content Kedua'],
        ['id'=>3,'title'=>'Lorem Ipsum 3','content'=> 'Content Ketiga'],
    ];
    return view('blog',compact('posts'));
});


//latihan
Route ::get('isi',function(){
    $posts =[
        ['id'=>1,'name'=>'Maudy Meilisa', 'username'=>'Maudy_mei4','email'=>'maudy@gamil.com','alamat'=>"inhoftank",'mapel'=>[
            'mapel1'=>'Bahasa Indonesia',
            'mapel2'=>'Bahasa Inggris',
            'mapel3'=>'Matematika',
        ]],
        ['id'=>2,'name'=>'Risma Fadhilah', 'username'=>'Risma_fadi1','email'=>'risma@gamil.com','alamat'=>"ciparay",'mapel'=>[
            'mapel1'=>'Bahasa Indonesia',
            'mapel2'=>'Bahasa Inggris',
            'mapel3'=>'Matematika',
        ]],
        ['id'=>3,'name'=>'Tiara Novitasari', 'username'=>'Tiara_novi2','email'=>'tiara@gamil.com','alamat'=>"kopo",'mapel'=>[
            'mapel1'=>'Bahasa Indonesia',
            'mapel2'=>'Bahasa Inggris',
            'mapel3'=>'Matematika',
        ]],
        ['id'=>4,'name'=>'Syifa Siti', 'username'=>'Syifa_siti5','email'=>'syifa@gamil.com','alamat'=>"rancamanyar",'mapel'=>[
            'mapel1'=>'Bahasa Indonesia',
            'mapel2'=>'Bahasa Inggris',
            'mapel3'=>'Matematika',
        ]],
        ['id'=>5,'name'=>'Riska Amelia', 'username'=>'Riska_amel3','email'=>'riska@gamil.com','alamat'=>"banjaran",'mapel'=>[
            'mapel1'=>'Bahasa Indonesia',
            'mapel2'=>'Bahasa Inggris',
            'mapel3'=>'Matematika',
        ]],

        ];
        return view('isi',compact('posts'));
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


