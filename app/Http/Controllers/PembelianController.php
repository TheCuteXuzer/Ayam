<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\jenisPembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
    	$data = [
    		'jenisPembelian' => jenisPembelian::all()
    	];
    	return view('form_pembelian', $data);
    }
    public function tambah(Request $req)
    {
    	$pembelian = new Pembelian;
    	$pembelian->id_jenis_pembelian = $req->jenisPembelian;
    	$pembelian->nama_barang = $req->namaBarang;
    	$pembelian->jumlah = $req->jumlah;
    	$pembelian->harga_satuan = $req->hargaSatuan;
    	$pembelian->satuan = $req->satuan;
    	$pembelian->harga_total = $req->totalHarga;
    	$pembelian->lokasi_pembelian = $req->lokasi;
    	$pembelian->tanggal_pembelian = $req->tanggalPembelian;
    	$pembelian->save();
    	flash('Record Telah Berhasil Ditambahkan')->succcess();
    	return redirect('/pembelian/history');
    }
}
