@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DATA PEGAWAI')

	<left><a href="/pegawai/tambah"><button class="rounded" style="background-color:#0066ff; border-color:white; color:white; width: 200px"> + Tambah Pegawai Baru </button></a></left>

	<br/>
	<br/>

    <div class="container">
        <p>Cari Data Pegawai :</p>
        <form action="/pegawai/cari" method="GET">
            <div class="row">
                <div class="col-10"><input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}"></div>
                <div class="col-1"><input class="form-control btn-success" type="submit" value="CARI"></div>
                <div class="col-1"> </div>
            </div>
        </form>
    </div>

    <br/>

	<table class="table table-info table-bordered" border="1">
		<tr>
			<th>No</th>
            <th>Nama</th>
			<!--
            <th>Jabatan</th>
			<th>Umur</th>
            -->
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->pegawai_nama }}</td>
			<!--
            <td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
            -->
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/detail/{{ $p->pegawai_id }}"><button class="btn btn-primary"> View Details</button></a>
                |
                <a href="/pegawai/edit/{{ $p->pegawai_id }}"><button class="btn btn-warning"> Edit </button></a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"><button class="btn btn-danger"> Hapus </button></a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}

@endsection
