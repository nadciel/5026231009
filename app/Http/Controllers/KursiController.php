<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KursiController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table kursi
		// $kursi = DB::table('kursi')->get();
		$kursi = DB::table('kursi')->paginate(10);
 
    	// mengirim data kursi ke view indexkursi
		return view('indexkursi',['kursi' => $kursi]);
	}
 
	// method untuk menampilkan view form tambah kursi
	public function tambah()
	{
 
		// memanggil view tambahkursi
		return view('tambahkursi');
	}
 
	// method untuk insert data ke table kursi
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('kursi')->insert([
			'kursi_merk' => $request->merk,
			'kursi_harga' => $request->harga,
			'kursi_tersedia' => $request->ketersediaan,
			'kursi_berat' => $request->berat
		]);
		// alihkan halaman ke halaman kursi
		return redirect('/kursi');
	}
 
	// method untuk edit data kursi
	public function edit($id)
	{
		// mengambil data kursi berdasarkan id yang dipilih
		$kursi = DB::table('kursi')->where('kursi_id',$id)->get();
		// passing data kursi yang didapat ke view editkursi.blade.php
		return view('editkursi',['kursi' => $kursi]);
	}
 
	// update data kursi
	public function update(Request $request)
	{
		// update data kursi
		DB::table('kursi')->where('kursi_id',$request->id)->update([
			'kursi_merk' => $request->merk,
			'kursi_harga' => $request->harga,
			'kursi_tersedia' => $request->ketersediaan,
			'kursi_berat' => $request->berat
		]);
		// alihkan halaman ke halaman kursi
		return redirect('/kursi');
	}
 
	// method untuk hapus data kursi
	public function hapus($id)
	{
		// menghapus data kursi berdasarkan id yang dipilih
		DB::table('kursi')->where('kursi_id',$id)->delete();
		
		// alihkan halaman ke halaman kursi
		return redirect('/kursi');
	}

	// method untuk mencari kursi
 	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table kursi sesuai pencarian data
		$kursi = DB::table('kursi')
		->where('kursi_merk','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data kursi ke view index
		return view('indexkursi',['kursi' => $kursi, 'cari' => $cari]);
	}
}