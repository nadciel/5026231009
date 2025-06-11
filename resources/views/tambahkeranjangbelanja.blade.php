@extends('template')

@section('content')
	<h3>Tambah Pembelian</h3>
 
	<a href="/keranjangbelanja" class="btn btn-info"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
		<div class="row my-2">
			<div class="col-3">
				Kode Barang
			</div>
			<div class="col-8">
				<textarea name="KodeBarang" required="required" class="form-control"></textarea>
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Jumlah Pembelian
			</div>
			<div class="col-8">
				<textarea name="Jumlah" required="required" class="form-control"></textarea>
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Harga per Item
			</div>
			<div class="col-8">
				<textarea name="Harga" required="required" class="form-control"></textarea>
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				<input type="submit" value="Beli" class="btn btn-success">
			</div>
		</div>
	</form>
@endsection