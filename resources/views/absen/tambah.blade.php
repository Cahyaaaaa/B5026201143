@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

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
                    <div class='input-group date ' id='dtpickerdemo' style="width: 100%">
                        <input type='text' class="form-control" name="tanggal" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                        });
                    </script>
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
            <center><input type="submit" value="Simpan Data"></center>
        </div>
        <div class="col-4">

        </div>

	</form>

@endsection


