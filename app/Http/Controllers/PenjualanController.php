<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Ayam;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {

        $data = [
            'ayam' => Ayam::all()
        ];

        return view('penjualan', $data);
    }
    public function tambah(Request $request)
    {

        $idAyam = $request->idAyam;
        $jumlahAyam = $request->jumlahAyam;
        $totalKg = $request->totalKg;
        $hargaKg = $request->hargaKg;
        $totalHarga = $request->hargaTotal;
        $lokasi = $request->lokasi;

        $ayam = Ayam::find($idAyam);

        if ($ayam == null) {
            return back()->with('error', 'ID Ayam tidak terdaftar di database');
        }

        if ($ayam->sisa_ayam < $jumlahAyam) {
            return back()->with('error', 'Jumlah pembelian melebihi kapasitas ayam');
        }
        $penjualan = new Penjualan;
        $penjualan->id_ayam  = $idAyam;
        $penjualan->jumlah_ayam = $jumlahAyam;
        $penjualan->total_kg = $totalKg;
        $penjualan->harga_kg = $hargaKg;
        $penjualan->total_harga = $totalHarga;
        $penjualan->lokasi_penjualan = $lokasi;
        $penjualan->tanggal_penjualan = date('Y-m-d');
        $penjualan->save();
        $ayam->sisa_ayam = $ayam->sisa_ayam - $jumlahAyam;
        $ayam->panen = "Ya";
        $ayam->save();
        return redirect('/dashboard');
    }
    public function history()
    {
        $data = [
            'penjualan' => Penjualan::all()
        ];
        return view('history_penjualan', $data);
    }
}