@extends('template')

@section('content')
	<h3>Data Keranjang Belanja</h3>

    <a href="/keranjangbelanja/tambah" class="btn btn-success my-3"> + Beli</a>
	<br/>
	<table class="table table-striped">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $kb)
        @php
			$total = $kb->Jumlah * $kb->Harga;
		@endphp
		<tr>
			<td>{{ $kb->ID }}</td>
			<td>{{ $kb->KodeBarang }}</td>
			<td>{{ $kb->Jumlah }}</td>
			<td>Rp{{ number_format($kb->Harga, 0, ',', '.') }}</td>
            <td>Rp{{ number_format($total, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjangbelanja/hapus/{{ $kb->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection