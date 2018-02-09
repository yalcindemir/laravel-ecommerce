<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index(){
        $isim = "Yalçın";
        $soyisim = "Demir";
        $isimler = ['Yalçın','Samed','Selami'];
        $kullanicilar = [
            ['id'=> 1,'kullanici_adi'=>'Yalçın'],
            ['id'=> 2,'kullanici_adi'=>'Semra'],
            ['id'=> 3,'kullanici_adi'=>'Deniz'],
            ['id'=> 4,'kullanici_adi'=>'Ahmet'],
            ['id'=> 5,'kullanici_adi'=>'Mehmet']
        ];
        //return view('anasayfa')->with(['isim'=>$isim,'soyisim'=>$soyisim]);
        return view('anasayfa',Compact('isim','soyisim','isimler','kullanicilar'));
    }
}
