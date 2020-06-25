<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penjualan')->insert([
            'id_ayam' => '1',
            'tanggal_penjualan' => '2002-03-11',
            'total_harga' => '200000',
            'lokasi_penjualan' => 'Bantul Kota'
        ]);
    }
}