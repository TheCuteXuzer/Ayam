<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusAyam extends Model
{
    protected $table = 'status_ayam';

    protected $primaryKey = 'id_status_ayam';
    
    public function ayam() 
    {
        return $this->belongsTo('App\Models\Ayam', 'id_status_ayam', 'id_status_ayam');
    }
}