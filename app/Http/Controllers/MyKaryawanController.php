<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table mykaryawan
		$mykaryawan = DB::table('mykaryawan')->get();
 
    	// mengirim data mykaryawan ke view index
		return view('indexeas',['mykaryawan' => $mykaryawan]);
	}
 
	// method untuk edit data mykaryawan
	public function edit($kodepegawai)
	{
		// mengambil data mykaryawan berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();
		// passing data mykaryawan yang didapat ke view edit.blade.php
		return view('editeas',['mykaryawan' => $mykaryawan]);
	}
 
	// update data mykaryawan
	public function update(Request $request)
	{
		// update data mykaryawan
		DB::table('mykaryawan')->where('kodepegawai',$request->kodepegawai)->update([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman mykaryawan
		return redirect('/eas');
	}

    // menampilkan data karyawan berdasarkan kodepegawai
    public function view($kodepegawai)
    {
        // mengambil data mykaryawan berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();
        // passing data mykaryawan yang didapat ke view view.blade.php
        return view('vieweas', ['mykaryawan' => $mykaryawan]);
    }
}
