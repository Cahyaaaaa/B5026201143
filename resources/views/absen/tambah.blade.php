@extends('layout.ceria')

@section('title', 'Tambah Absen')

@section('isikonten')

@section('judulhalaman', 'ABSEN PEGAWAI')

	<a href="/absen"><button class="btn btn-info">Kembali</button></a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}

        <div class="col-8">
            <div class="row">
                <div class="col-3">
                    Pegawai
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-8">
                    <select id="IDPegawai" name="IDPegawai" required="required" style="width: 100%">
                        @foreach($pegawai as $p)
                            <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select><br>
                </div>
            </div>
            <br/>
            <div class="form-group">
            <div class="row">
                <div class="col-3">
                    <label for="dtpickerdemo" class="control-label">Tanggal :</label>
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-8">
                    <input type="datetime-local" class="form-control" required="required" name="tanggal" >
                </div>
            </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-3">
                    Status
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-8">
                    <input type="radio" id="hadir" name="status" value="H">
                    <label for="hadir">HADIR</label><br>
                    <input type="radio" id="tidak" name="status" value="T" checked="checked">
                    <label for="tidak">TIDAK HADIR</label><br>
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

@endsection


