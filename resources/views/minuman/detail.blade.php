@extends('layout.ceria')

@section('title', 'Detail Data Minuman')

@section('isikonten')

@section('judulhalaman', 'DETAIL DATA MINUMAN')

	<a href="/minuman"><button class="btn btn-info"> Kembali </button></a>

	<br/>
	<br/>

	@foreach($minuman as $p)

        <div class="col-8" style="color:black">
            <div class="row">
                <label class="col-3" for="merk"> Merk </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <label class="col-3"> {{ $p->merkminuman }} </label>
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="stock"> Stock </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <label class="col-3"> {{ $p->stockminuman }} </label>
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="tersedia"> Tersedia </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <label class="col-3"> {{ $p->tersedia }} </label>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
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
