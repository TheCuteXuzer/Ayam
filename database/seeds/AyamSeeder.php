<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AyamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ayam')->insert([
           'jumlah_ayam_masuk' => '200',
           'sisa_ayam' => '200',
           'tanggal_masuk' => '2020-05-1',
           'panen' => 'Tidak'
        ]);
    }
}