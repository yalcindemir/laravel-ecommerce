<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;

    protected $table = 'kategori';
    //protected $fillable = ['kategori_adi','slug']; //create comutu ile oluşturulabilecek alan
    protected $guarded =[]; //fillable tam tersi kotunması gereken alanları gösteririz.
    const CREATED_AT = 'olusturulma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';
}

