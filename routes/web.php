<?php

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
//route basic
Route::get('/', function () {
    return view('welcome');
});
Route::get('/adit', function () {
    return '<marquee><center><h1>HALLO</h1></center></marquee>'
  ;
});
//route parameter
Route::get('/kantin/{z}/{x}/{v}', function($a,$b,$c){
	return  '<h1>Makan <i>' .$a. '</i></br>'
	. 'Minum <i>' .$b. '</i></br>'
	.  'Ngemil <i>' .$c. '</i></h1>';
    });	
//route optional parameter
Route:: get ('user/{nama?}',function($a="Dadang Conelo"){
return $a;
});	
//tes akses model
Route::get('/tesmodel',function(){
	//mnegeluarkan semua data yang ada di table siswa melalui model siswa
	$a=App\AditModel::all();
	return$a;
});

route::get('/tesmodel1',function(){
	$a=App\AditModel::find(2);
	return $a;
});
route::get('/tesmodel2',function(){
	$a=App\AditModel::where('nama','a')->get();
	return $a;
	});