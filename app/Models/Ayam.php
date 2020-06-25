<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ayam extends Model
{


    protected $table = 'ayam';

    protected $primaryKey = 'id_ayam';

    public function statusAyam() 
    {
        return $this->hasOne('App\Models\StatusAyam', 'id_status_ayam', 'id_status_ayam');
    }
    
    public function penjualan()
    {
        return $this->belongsTo('App\Models\Penjualan', 'id_ayam', 'id_ayam');
    }

}