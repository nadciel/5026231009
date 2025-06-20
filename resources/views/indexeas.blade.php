@extends('template')

@section('content')
	<h3>Data MyKaryawan</h3>

	<br/>
	<table class="table table-striped">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($mykaryawan as $mk)
		<tr>
			<td>{{ $mk->kodepegawai }}</td>
			<td style="text-transform: capitalize;">{{ $mk->namalengkap }}</td>
			<td>{{ $mk->divisi }}</td>
			<td>{{ $mk->departemen }}</td>
			<td>
				<a href="/eas/edit/{{ $mk->kodepegawai }}" class="btn btn-success">Edit</a>
				<a href="/eas/view/{{ $mk->kodepegawai }}" class="btn btn-primary">View</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection