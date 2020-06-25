<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id('id_pembelian');
            $table->unsignedBigInteger('id_jenis_pembelian');
            $table->foreign('id_jenis_pembelian')->references('id_jenis_pembelian')->on('jenis_pembelian');
            $table->string('nama_barang');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->string('satuan');
            $table->integer('harga_total');
            $table->string('lokasi_pembelian');
            $table->date('tanggal_pembelian');
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
        Schema::dropIfExists('pembelian');
    }
}