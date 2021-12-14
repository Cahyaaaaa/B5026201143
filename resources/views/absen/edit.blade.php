@extends('layout.ceria')

@section('title', 'Edit Absen')

@section('isikonten')

@section('judulhalaman', 'EDIT ABSEN')

    <a href="/absen"><button class="btn btn-info">Kembali</button></a>

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>

        <div class="col-8" style="color:black">
            <div class="row">
                <div class="col-3">
                    Pegawai
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-8">
                    <select id="IDPegawai" name="IDPegawai" style="width:100%" required="required">
                        @foreach($pegawai as $peg)
                            <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
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
                    <input type="datetime-local" class="form-control" required="required" name="tanggal">
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
                    <input type="radio" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
                    <label for="hadir">HADIR</label> <br>
                    <input type="radio" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
                    <label for="tidak">TIDAK HADIR</label>
                </div>
            </div>
            <br/>
            <center><button type="submit" class="col-2 form-control btn-secondary">Simpan Data</button></center>
            <br/>
            <br/>
            <br/>
        </div>
        <div class="col-4">

        </div>

	</form>
	@endforeach


    @endsection
