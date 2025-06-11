<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table keranjangbelanja
		$keranjangbelanja = DB::table('keranjangbelanja')->get();
		// $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);
 
    	// mengirim data keranjangbelanja ke view indexkeranjangbelanja
		return view('indexkeranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);
	}
 
	// method untuk menampilkan view form tambahkeranjangbelanja
	public function tambah()
	{
 
		// memanggil view tambahkeranjangbelanja
		return view('tambahkeranjangbelanja');
	}
 
	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
            'ID' => $request->ID,
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}
 
	// method untuk hapus data keranjangbelanja
	public function hapus($ID)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();
		
		// alihkan halaman ke halaman kursi
		return redirect('/keranjangbelanja');
	}
}