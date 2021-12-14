@extends('layout.ceria')

@section('title', 'Data Minuman')

@section('isikonten')

@section('judulhalaman', 'DATA STOCK MINUMAN')

    <a href="/minuman/tambah"><button class="rounded" style="background-color:#0066ff; border-color:white; color:white; width: 200px"> + Tambah Minuman Baru </button></a>

	<br/>
	<br/>

	<div class="container">
        <p>Cari Data Minuman :</p>
        <form action="/minuman/cari" method="GET">
            <div class="row">
                <div class="col-10"><input class="form-control" type="text" name="cari" placeholder="Cari Minuman .." value="{{ old('cari') }}"></div>
                <div class="col-1"><input class="form-control btn-success" type="submit" value="CARI"></div>
                <div class="col-1"> </div>
            </div>
        </form>
    </div>

    <br/>

    <table class="table table-info table-bordered" border="1">
		<tr style="text-align: center">
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($minuman as $p)
		<tr style="text-align: center">
			<td>{{ $p->merkminuman }}</td>
			<td>{{ $p->stockminuman }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/minuman/detail/{{ $p->kodeminuman }}"><button class="btn btn-primary"> View Details </button></a>
                |
                <a href="/minuman/edit/{{ $p->kodeminuman }}"><button class="btn btn-warning"> Edit </button></a>
				|
				<a href="/minuman/hapus/{{ $p->kodeminuman }}"><button class="btn btn-danger"> Hapus </button></a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $minuman->links() }}

    <br/>
    <br/>
    <br/>
    <br/>

@endsection
