@extends('template')

@section('content')
	<h3>Edit MyKaryawan</h3>
 
	<br/>
 
	@foreach($mykaryawan as $mk)
	<form action="/eas/update" method="post">
		{{ csrf_field() }}
		<div class="row my-2">
            <div class="col-3">
				Kode Pegawai
			</div>
			<div class="col-8">
				<input type="text" required="required" name="kodepegawai" value="{{ $mk->kodepegawai }}" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Nama Lengkap
			</div>
			<div class="col-8">
				<input type="text" required="required" name="namalengkap" value="{{ $mk->namalengkap }}" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Divisi
			</div>
			<div class="col-8">
				<input type="text" required="required" name="divisi" value="{{ $mk->divisi }}" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Departemen
			</div>
			<div class="col-8">
				<input type="text" required="required" name="departemen" value="{{ $mk->departemen }}" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				<input type="submit" value="Simpan Perubahan" class="btn btn-success">
			</div>
		</div>
	</form>
	@endforeach
@endsection