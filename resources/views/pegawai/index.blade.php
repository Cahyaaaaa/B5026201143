@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DATA PEGAWAI')

	<a href="/pegawai/tambah"><button class="rounded" style="background-color:#0066ff; border-color:white; color:white; width: 200px"> + Tambah Pegawai Baru </button></a>

	<br/>
	<br/>

	<table class="table table-info table-striped table-bordered" border="1">
		<tr style="text-align: center">
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr style="text-align: center">
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}"><button class="btn btn-warning"> Edit </button></a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"><button class="btn btn-danger"> Hapus </button></a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
