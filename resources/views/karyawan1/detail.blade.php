@extends('layout.ceria')

@section('title', 'Detail Data Gaji Karyawan')

@section('isikonten')

@section('judulhalaman', 'DETAIL DATA GAJI KARYAWAN')

    <a href="/karyawan1"><button class="btn btn-info"> Kembali </button></a>

	<br/>
	<br/>

	@foreach($karyawan1 as $p)

        <div class="col-8" style="color:black">
            <div class="row">
                <label class="col-3" for="nama"> Nama </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <label class="col-3"> {{ $p->Nama }} </label>
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="pangkat"> Pangkat </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <label class="col-3"> {{ $p->Pangkat }} </label>
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="gaji"> Gaji </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <label class="col-3"> {{ $p->Gaji }} </label>
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
