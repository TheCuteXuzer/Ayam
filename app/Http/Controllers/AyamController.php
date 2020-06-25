<?php

namespace App\Http\Controllers;

use App\Models\Ayam;
use Illuminate\Http\Request;

class AyamController extends Controller
{
    public function index()
    {
        $data = [
            'ayam' => Ayam::all()
        ];
        flash('Data Telah Ditambahkan')->success();
        return view('ayam', $data);
    }
    public function tambah()
    {
    	return view('tambahAyam');
    }
    public function proses(Request $request)
    {
    	$ayam = new Ayam;
    	$ayam->jumlah_ayam_masuk = $request->jumlahAyam;
    	$ayam->sisa_ayam = $request->jumlahAyam;
    	$ayam->tanggal_masuk = $request->tanggalMasuk;
    	$ayam->panen = $request->panen;
    	$ayam->save();
    	flash('Record Berhasil Ditambahkan')->important();
    	return redirect('/ayam');
    }
}