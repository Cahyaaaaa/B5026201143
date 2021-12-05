@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DATA ABSEN')

	<a href="/absen/tambah"><button class="rounded" style="background-color:#0066ff; border-color:white; color:white; width: 200px"> + Tambah Absen Baru </button></a>

	<br/>
	<br/>

	<table class="table table-info table-striped table-bordered" border="1">
		<tr style="text-align: center">
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr style="text-align: center">
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}"><button class="btn btn-warning"> Edit </button></a>
				|
				<a href="/absen/hapus/{{ $p->ID }}"><button class="btn btn-danger"> Hapus </button></a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
