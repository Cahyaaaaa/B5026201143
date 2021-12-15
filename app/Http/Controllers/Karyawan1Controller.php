<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Karyawan1Controller extends Controller
{
    public function index()
    {
        // mengambil data dari table karyawan1
        $karyawan1 = DB::table('karyawan1')->get();

        // mengirim data karyawan1 ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }

    // method untuk edit data gaji karyawan
    public function edit($nip)
    {
        // mengambil data gaji karyawan berdasarkan nip yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $nip)->get();
        // passing data gaji karyawan yang didapat ke view edit.blade.php
        return view('karyawan1.edit', ['karyawan1' => $karyawan1]);
    }

    // update data gaji karyawan
    public function update(Request $request)
    {
        // update data gaji karyawan
        DB::table('karyawan1')->where('NIP', $request->nip)->update([
            'Nama' => $request->nama,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji,
        ]);
        // alihkan halaman ke halaman gaji karyawan
        return redirect('/karyawan1');
    }

    // method untuk view detail data gaji karyawan
    public function view($nip)
    {
        // mengambil data gaji karyawan berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $nip)->get();
        // passing data gaji karyawan yang didapat ke view edit.blade.php
        return view('karyawan1.detail', ['karyawan1' => $karyawan1]);
    }
}
