@extends('layout.ceria')

@section('title', 'Tambah Pegawai')

@section('isikonten')

@section('judulhalaman', 'DATA PEGAWAI')

	<a href="/pegawai"><button class="btn btn-info">Kembali</button></a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="col-8">
            <div class="row">
                <div class="col-3">
                    Nama
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-8">
                    <input type="text" name="nama" required="required" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-3">
                    Jabatan
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-8">
                    <input type="text" name="jabatan" required="required" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-3">
                    Umur
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-8">
                    <input type="number" name="umur" required="required" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-3">
                    Alamat
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-8">
                    <textarea name="alamat" required="required" style="width: 100%"></textarea>
                </div>
            </div>
            <br/>
            <center><input type="submit" value="Simpan Data"></center>
            <br/>
            <br/>
        </div>
        <div class="col-4">

        </div>

	</form>

@endsection
