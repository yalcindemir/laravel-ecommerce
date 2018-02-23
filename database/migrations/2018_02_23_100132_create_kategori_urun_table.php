<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriUrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_urun', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_id')->unsigned();
            $table->integer('urun_id')->unsigned();

            $table->foreign('kategori_id')->referances('id')->on('kategori')->onDelete('cascade');
            $table->foreign('urun_id')->referances('id')->on('urun')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('kategori_urun', function ($table) {
            $table->dropForeign('kategori_urun_kategori_id_foreign');
            $table->dropForeign('kategori_urun_urun_id_foreign');
        });

        Schema::dropIfExists('kategori_urun');
    }
}
