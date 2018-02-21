<?php

use Illuminate\Database\Seeder;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("urun")->insert([
            'urun_adi'=>'Mandalina',
            'fiyati'=>3.5
        ]);
    }
}
