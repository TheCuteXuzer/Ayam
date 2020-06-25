<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id('id_penjualan');
            $table->unsignedBigInteger('id_ayam');
            $table->foreign('id_ayam')->references('id_ayam')->on('ayam');
            $table->integer('jumlah_ayam');
            $table->integer('total_kg');
            $table->integer('harga_kg');
            $table->integer('total_harga');
            $table->date('tanggal_penjualan');
            $table->string('lokasi_penjualan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}