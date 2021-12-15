@extends('layout.ceria')

@section('title', 'Data Gaji Karyawan1')

@section('isikonten')

@section('judulhalaman', 'DATA GAJI KARYAWAN')

	<left><a href="/karyawan1/tambah"><button class="rounded" style="background-color:#0066ff; border-color:white; color:white; width: 250px"> + Tambah Gaji Karyawan Baru </button></a></left>

	<br/>
	<br/>

	<table class="table table-info table-bordered" border="1">
		<tr>
			<th>No</th>
            <th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $p)
		<tr>
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->Nama }}</td>
			<td>{{ $p->Pangkat }}</td>
            <td>{{ $p->Gaji }}</td>
			<td>
				<a href="/karyawan1/detail/{{ $p->NIP }}"><button class="btn btn-primary"> View Details </button></a>
                |
                <a href="/karyawan1/edit/{{ $p->NIP }}"><button class="btn btn-warning"> Edit </button></a>
				{{--|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"><button class="btn btn-danger"> Hapus </button></a>--}}
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
    <br/>
    <br/>
    <br/>

@endsection
