@extends('layout.ceria')

@section('title', 'Edit Data Gaji Karyawan')

@section('isikonten')

@section('judulhalaman', 'EDIT DATA GAJI KARYAWAN')

	<a href="/karyawan1"><button class="btn btn-info"> Kembali </button></a>

	<br/>
	<br/>

	@foreach($karyawan1 as $p)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $p->NIP }}"> <br/>

        <div class="col-8" style="color:black">
            <div class="row">
                <label class="col-3" for="nama"> Nama </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="text" name="nama" required="required" value="{{ $p->Nama }}" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="pangkat"> Pangkat </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="text" name="pangkat" required="required" value="{{ $p->Pangkat }}" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="gaji"> Gaji </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="number" name="gaji" required="required" value="{{ $p->Gaji }}" style="width: 100%">
                </div>
            </div>
            <br/>
            <center><button type="submit" class="col-2 form-control btn-secondary">Simpan Data</button></center>
            <br/>
            <br/>
            <br/>
            <br/>
        </div>
        <div class="col-4">

        </div>

	</form>
	@endforeach

@endsection
