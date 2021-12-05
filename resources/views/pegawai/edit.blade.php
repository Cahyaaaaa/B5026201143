@extends('layout.ceria')

@section('title', 'PEGAWAI')

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
                <div class="col-3">
                    Nama
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col">
                    <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" style="width: 100%">
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
                    <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" style="width: 100%">
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
                    <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" style="width: 100%">
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
                    <textarea required="required" name="alamat" style="width: 100%">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <br/>
            <center><input type="submit" value="Simpan Data"></center>
        </div>
        <div class="col-4">

        </div>

	</form>
	@endforeach

@endsection
