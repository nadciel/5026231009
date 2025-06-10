@extends('template')

@section('content')
	<h3>Data Kursi</h3>
 
	<a href="/kursi" class="btn btn-info"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/kursi/store" method="post">
		{{ csrf_field() }}
		<div class="row my-2">
			<div class="col-3">
				Merk
			</div>
			<div class="col-8">
				<input type="text" name="merk" required="required" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Harga
			</div>
			<div class="col-8">
				<input type="number" name="harga" required="required"  class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Ketersediaan
			</div>
			<div class="col-8">
				<input type="hidden" name="ketersediaan" value="0">
				<input type="checkbox" name="ketersediaan" value="1" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Berat
			</div>
			<div class="col-8">
				<input type="number" name="berat" required="required"  class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				<input type="submit" value="Simpan Data" class="btn btn-success">
			</div>
		</div>
	</form>
@endsection