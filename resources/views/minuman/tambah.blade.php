@extends('layout.ceria')

@section('title', 'MINUMAN')

@section('isikonten')

@section('judulhalaman', 'DATA STOCK MINUMAN')

	<a href="/minuman"><button class="btn btn-info">Kembali</button></a>

	<br/>
	<br/>

	<form action="/minuman/store" method="post">
		{{ csrf_field() }}

        <div class="col-8" style="color:black">
            <div class="row">
                <label class="col-3" for="merk"> Merk </label>
                <div class="col-1">:</div>
                <div class="col">
                    <input type="text" name="merk" required="required" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="stock"> Stock </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="number" name="stock" required="required" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="tersedia"> Tersedia </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="radio" id="ya" name="tersedia" value="Y">
                    <label for="ya">Tersedia</label> <br>
                    <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
                    <label for="tidak">TIDAK Tersedia</label>
                </div>
            </div>
            <br/>
            <center><button type="submit" class="col-2 form-control btn-secondary">Simpan Data</button></center>
        </div>
        <div class="col-4">

        </div>

	</form>

@endsection
