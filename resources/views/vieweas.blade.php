@extends('template')

@section('content')
	<h3>View MyKaryawan</h3>
    	
    <a href="/eas" class="btn btn-info"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($mykaryawan as $mk)
		<div class="row my-2">
            <div class="col-3">
				Kode Pegawai:
			</div>
			<div class="col-8">
				{{ $mk->kodepegawai }}
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Nama Lengkap:
			</div>
			<div class="col-8" style="text-transform: capitalize;">
				{{ $mk->namalengkap }}
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Divisi:
			</div>
			<div class="col-8">
				{{ $mk->divisi }}
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Departemen:
			</div>
			<div class="col-8">
				{{ $mk->departemen }}
			</div>
		</div>
	@endforeach
@endsection