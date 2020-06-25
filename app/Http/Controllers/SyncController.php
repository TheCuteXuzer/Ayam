<?php

namespace App\Http\Controllers;

use App\Models\Ayam;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use App\Http\Controllers\Controller;

class SyncController extends Controller
{

    public function index()
    {
        $ayams = Ayam::all();
        foreach ($ayams as $ayam) {
            if ($ayam->kelamin == 'L' && $ayam->petelur != '') {
                $update = Ayam::find($ayam->id_ayam);
                $update->petelur = 'Tidak';
                $update->save();
            }
            if (( strtotime(date('Y-m-d')) - strtotime($ayam->tanggal_lahir)  ) / 86400 >= 90) {
                $update = Ayam::find($ayam->id_ayam);
                $update->panen = 'Ya';
                $update->save();
            } else {
                $update = Ayam::find($ayam->id_ayam);
                $update->panen = 'Tidak';
                $update->save();
            }
        }
        SweetAlert::success('Sync', 'Sync Successfully');
        return back();

    }
}