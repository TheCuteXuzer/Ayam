<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayam', function (Blueprint $table) {
            $table->id('id_ayam');
            $table->integer('jumlah_ayam_masuk');
            $table->integer('sisa_ayam');
            $table->date('tanggal_masuk');
            $table->enum('panen', ['Ya', 'Tidak'])->nullable();
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
        Schema::dropIfExists('ayam');
    }
}