@extends('layout.ceria')

@section('title', 'Edit Data MINUMAN')

@section('isikonten')

@section('judulhalaman', 'EDIT DATA MINUMAN')

	<a href="/minuman"><button class="btn btn-info"> Kembali </button></a>

	<br/>
	<br/>

	@foreach($minuman as $p)
	<form action="/minuman/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $p->kodeminuman }}"> <br/>

        <div class="col-8" style="color:black">
            <div class="row">
                <label class="col-3" for="merk"> Merk </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="text" name="merk" required="required" value="{{ $p->merkminuman }}" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="stock"> Stock </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="number" name="stock" required="required" value="{{ $p->stockminuman }}" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="tersedia"> Tersedia </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="radio" id="ya" name="tersedia" value="Y" @if ($p->tersedia === "Y") checked="checked" @endif>
                    <label for="ya">Tersedia</label> <br>
                    <input type="radio" id="tidak" name="tersedia" value="T" @if ($p->tersedia === "T") checked="checked" @endif>
                    <label for="tidak">TIDAK Tersedia</label>
                </div>
            </div>
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
