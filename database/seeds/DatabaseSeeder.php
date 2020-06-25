<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(JenisSeeder::class);
        // $this->call(StatusSeeder::class);
        $this->call(AyamSeeder::class);
        // $this->call(PenjualanSeeder::class);
        $this->call(PembelianSeeder::class);
    }
}