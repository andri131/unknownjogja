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

//login
Route::get('/pengurus','login@tampilPengurus')->middleware('auth:pengurus');
Route::get('/pengguna', 'login@tampilPengguna')->middleware('auth:pengguna');
Route::get('/login','login@tampilLogin')->middleware('guest');
Route::post('/kirimdata', 'login@masuk');
Route::get('/keluar','login@keluar');

//register
Route::get('/register','login@register');
Route::post('/register/simpanRegister','login@simpanRegister')->middleware('guest');

//////////untuk admin wisata
Route::get('/beranda','adminController@beranda')->middleware('auth:pengurus');
Route::get('/beranda/wisata','adminController@wisata')->middleware('auth:pengurus');
Route::get('/beranda/wisata/tambah','adminController@tambah')->middleware('auth:pengurus');
Route::post('/beranda/wisata/simpanData','adminController@simpanData')->middleware('auth:pengurus');
Route::get('/beranda/wisata/hapus/{id}','adminController@hapus')->middleware('auth:pengurus');
Route::get('/beranda/wisata/update/{id}','adminController@update')->middleware('auth:pengurus');
Route::post('/beranda/wisata/simupdate','adminController@simupdate')->middleware('auth:pengurus');

///untuk admin kuliner
Route::get('/beranda/kuliner','adminController@kuliner')->middleware('auth:pengurus');
Route::get('/beranda/kuliner/tambahKuliner','adminController@tambahKuliner')->middleware('auth:pengurus');
Route::post('/beranda/kuliner/simpanDataKuliner','adminController@simpanDataKuliner')->middleware('auth:pengurus');
Route::get('/beranda/kuliner/hapusKuliner/{id}','adminController@hapusKuliner')->middleware('auth:pengurus');
Route::get('/beranda/kuliner/updateKuliner/{id}','adminController@updateKuliner')->middleware('auth:pengurus');
Route::post('/beranda/kuliner/simupdateKuliner','adminController@simupdateKuliner')->middleware('auth:pengurus');

/////untuk admin event
Route::get('/beranda/event','adminController@event')->middleware('auth:pengurus');
Route::get('/beranda/event/tambahEvent','adminController@tambahEvent')->middleware('auth:pengurus');
Route::post('/beranda/event/tambah/simpanEvent','adminController@simpanEvent')->middleware('auth:pengurus');
Route::get('/beranda/event/hapusEvent/{id}','adminController@hapusEvent')->middleware('auth:pengurus');
Route::get('/beranda/event/updateEvent/{id}','adminController@updateEvent')->middleware('auth:pengurus');
Route::post('/beranda/event/simupdateEvent','adminController@simupdateEvent')->middleware('auth:pengurus');

//untuk user
Route::get('/home','userController@home')->middleware('auth:pengguna');
Route::get('/home/wisata','userController@wisata')->middleware('auth:pengguna');
Route::get('/home/event','userController@event')->middleware('auth:pengguna');
Route::get('/home/kuliner','userController@kuliner')->middleware('auth:pengguna');

//untuk menampilkan detailnya
Route::get('/home/wisata/informasiWisata/{id}','userController@informasiWisata')->middleware('auth:pengguna');
Route::get('/home/kuliner/informasiKuliner/{id}','userController@informasiKuliner')->middleware('auth:pengguna');
Route::get('/home/event/informasiEvent/{id}','userController@informasiEvent')->middleware('auth:pengguna');

//untuk komentar
Route::get('/home/wisata/komentarW/{id}','userController@komentarW')->middleware('auth:pengguna');
Route::post('/home/wisata/komentar_wisata','userController@komentar_wisata')->middleware('auth:pengguna');
Route::get('/home/event/komentarE/{id}','userController@komentarE')->middleware('auth:pengguna');
Route::post('/home/event/komentar_event','userController@komentar_event')->middleware('auth:pengguna');
Route::get('/home/kuliner/komentarK/{id}','userController@komentarK')->middleware('auth:pengguna');
Route::post('/home/kuliner/komentar_kuliner','userController@komentar_kuliner')->middleware('auth:pengguna');

//untuk pencarian 
Route::get('/home/wisata/alam','userController@alam')->middleware('auth:pengguna');
Route::get('/home/wisata/sejarah','userController@sejarah')->middleware('auth:pengguna');
Route::get('/home/wisata/museum','userController@museum')->middleware('auth:pengguna');