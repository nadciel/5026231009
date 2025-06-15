@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<br/>
	<table class="table table-striped">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Action</th>
		</tr>
		@foreach($karyawan as $kw)
		<tr>
			<td>{{ $kw->kodepegawai }}</td>
			<td style="text-transform: uppercase;">{{ $kw->namalengkap }}</td>
			<td>{{ $kw->divisi }}</td>
            <td style="text-transform: lowercase;">{{ $kw->departemen }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $kw->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>
    <a href="/karyawan/tambah" class="btn btn-success my-3"> Tambah Data</a>
@endsection