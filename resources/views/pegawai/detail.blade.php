@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT PEGAWAI')

	<a href="/pegawai"><button class="btn btn-info"> Kembali </button></a>

	<br/>
	<br/>

	@foreach($pegawai as $p)

        <div class="col-8" style="color:black">
            <div class="row">
                <label class="col-3" for="nama"> Nama </label>
                <div class="col-1">:</div>
                <div class="col">
                    <label class="col-8">{{ $p->pegawai_nama }}</label>
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="jabatan"> Jabatan </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <label class="col-8">{{ $p->pegawai_jabatan }}</label>
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="umur"> Umur </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <label class="col-8">{{ $p->pegawai_umur }}</label>
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="alamat"> Alamat </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <label class="col-8" for="alamat">{{ $p->pegawai_alamat }}</label>
                </div>
            </div>
        </div>
        <div class="col-4">

        </div>

	@endforeach

@endsection
