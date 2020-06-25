<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_pembelian')->insert([
            'nama_jenis_pembelian' => 'Pakan'
        ]);
    }
}