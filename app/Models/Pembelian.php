<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';

    protected $primarykey = 'id_pembelian';

    public function jenisPembelian()
    {
        return $this->hasMany('App\Models\jenisPembelian', 'id_jenis_pembelian', 'id_jenis_pembelian');
    }
}