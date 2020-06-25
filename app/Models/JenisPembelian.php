<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisPembelian extends Model
{
    protected $table = 'jenis_pembelian';

    protected $primaryKey = 'id_jenis_pembelian';

    public function pembelian()
    {
        return $this->belongsTo('App\Models\Pembelian', 'id_jenis_pembelian', 'id_jenis_pembelian');
    }
}