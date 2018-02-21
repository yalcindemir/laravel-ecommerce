<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Kategori;

class AnasayfaController extends Controller
{
    public function index(){
        $kategoriler = Kategori::all()->take(8);
        return view('anasayfa',compact('kategoriler'));
    }
}
