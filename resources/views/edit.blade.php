@extends('template')

@section('content')
	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai" class="btn btn-info"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<div class="row my-2">
			<div class="col-12">
				<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Nama
			</div>
			<div class="col-8">
				<input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Jabatan
			</div>
			<div class="col-8">
				<input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Umur
			</div>
			<div class="col-8">
				<input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Alamat
			</div>
			<div class="col-8">
				<textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				<input type="submit" value="Simpan Data" class="btn btn-success">
			</div>
		</div>
	</form>
	@endforeach
@endsection