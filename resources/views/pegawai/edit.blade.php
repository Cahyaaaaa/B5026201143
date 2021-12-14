@extends('layout.ceria')

@section('title', 'Edit Pegawai')

@section('isikonten')

@section('judulhalaman', 'EDIT PEGAWAI')

	<a href="/pegawai"><button class="btn btn-info"> Kembali </button></a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="col-8" style="color:black">
            <div class="row">
                <label class="col-3" for="nama"> Nama </label>
                <div class="col-1">:</div>
                <div class="col">
                    <input type="text" name="nama" required="required" value="{{ $p->pegawai_nama }}" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="jabatan"> Jabatan </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="text" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="umur"> Umur </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="number" name="umur" required="required" value="{{ $p->pegawai_umur }}" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="alamat"> Alamat </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <textarea name="alamat" required="required" style="width: 100%">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <br/>
            <center><button type="submit" class="col-2 form-control btn-secondary">Simpan Data</button></center>
            <br/>
        </div>
        <div class="col-4">

        </div>

	</form>
	@endforeach

@endsection
