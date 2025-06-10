@extends('template')

@section('content')
	<h3>Data Kursi</h3>

	<p>Cari Data Kursi:</p>
	<form action="/kursi/cari" method="GET">
		<input type="text" class="form-control mb-3" name="cari" placeholder="Cari Kursi...">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<br/>
	<table class="table table-striped">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Ketersediaan</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($kursi as $k)
		<tr>
			<td>{{ $k->kursi_merk }}</td>
			<td>{{ $k->kursi_harga }}</td>
			<td>{{ $k->kursi_tersedia }}</td>
			<td>{{ $k->kursi_berat }}</td>
			<td>
				<a href="/kursi/edit/{{ $k->kursi_id }}" class="btn btn-success">Edit</a>
				<a href="/kursi/hapus/{{ $k->kursi_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $kursi->links() }}
@endsection