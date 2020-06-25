<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembelian')->insert([
            'id_jenis_pembelian' => '1',
            'nama_barang' => 'BR',
            'jumlah' => '1',
            'harga_satuan' => '7000',
            'satuan' => 'KG',
            'harga_total' => '7000',
            'lokasi_pembelian' => 'samping rumah',
            'tanggal_pembelian' => '2001-12-15'
        ]);
    }
}