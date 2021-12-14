@extends('layout.ceria')

@section('title', 'Absen Pegawai')

@section('isikonten')

@section('judulhalaman', 'DATA ABSEN')

	<a href="/absen/tambah"><button class="rounded" style="background-color:#0066ff; border-color:white; color:white; width: 200px"> + Tambah Absen Baru </button></a>

	<br/>
	<br/>

    <div class="container">
        <p>Cari Absen Pegawai :</p>
        <form action="/absen/cari" method="GET">
            <div class="row">
                <div class="col-10"><input class="form-control" type="text" name="cari" placeholder="Cari Absen .." value="{{ old('cari') }}"></div>
                <div class="col-1"><input class="form-control btn-success" type="submit" value="CARI"></div>
                <div class="col-1"> </div>
            </div>
        </form>
    </div>

    <br/>

	<table class="table table-info table-bordered" border="1">
		<tr style="text-align: center">
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr style="text-align: center">
			<td>{{ $p->pegawai_nama }}</td>
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

    {{ $absen->links() }}

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

@endsection
