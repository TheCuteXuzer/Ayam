<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
     
    protected $primaryKey = 'id_penjualan';

    public function ayam()
    {
        return $this->hasMany('App\Models\Ayam', 'id_ayam', 'id_ayam');
    }
}