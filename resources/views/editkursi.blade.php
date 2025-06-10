@extends('template')

@section('content')
	<h3>Edit Kursi</h3>
 
	<a href="/kursi" class="btn btn-info"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($kursi as $k)
	<form action="/kursi/update" method="post">
		{{ csrf_field() }}
		<div class="row my-2">
			<div class="col-12">
				<input type="hidden" name="id" value="{{ $k->kursi_id }}">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Merk
			</div>
			<div class="col-8">
				<input type="text" required="required" name="merk" value="{{ $k->kursi_merk }}" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Harga
			</div>
			<div class="col-8">
				<input type="number" required="required" name="harga" value="{{ $k->kursi_harga }}" class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Ketersediaan
			</div>
			<div class="col-8">
                <input type="hidden" name="ketersediaan" value="0">
				<input type="checkbox" name="ketersediaan" value="1" {{ $k->kursi_tersedia ? '1' : '0' }} class="form-control">
			</div>
		</div>
		<div class="row my-2">
			<div class="col-3">
				Berat
			</div>
			<div class="col-8">
				<input type="number" required="required" name="berat" value="{{ $k->kursi_berat }}" class="form-control">
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