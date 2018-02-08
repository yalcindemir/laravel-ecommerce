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

Route::get('/', function () {
    return view('welcome');
});

Route::get('merhaba',function (){

   return "Merhaba";
});

Route::get('/api/v1/merhaba',function (){
    return ['mesaj' => 'merhaba'];
});

Route::get('/urun/{urunadi}/{id?}',function ($urunadi,$id=0){
    return "Ürün Adı: $id $urunadi";
})->name('urun_detay');

Route::get('/kampanya',function (){
   return redirect()->route('urun_detay',['urunadi'=>'elma','id'=>5]);
});