<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urun;

class UrunController extends Controller
{
    public function index($slug_urunadi)
    {
        $urun = Urun::where('slug',$slug_urunadi)->firsOrFail();
        return view('urun',compact('urun'));
    }
}
