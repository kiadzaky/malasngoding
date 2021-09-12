<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    function index()
    {
        // $pegawai = DB::table('pegawai')->get();
        $pegawai = DB::table('pegawai')->paginate(10);

        return view('pegawai/index',['pegawai' => $pegawai]);
    }
    function daftar()
    {
        return view('pegawai/daftar');
    }
    function store(Request $request)        
    {
        
        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        $this->validate($request,[
            'nama' => 'required|min:5',
            'alamat'=> 'required|min:10'
        ], $messages);
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_alamat'=>$request->alamat
        ]);
       return redirect('pegawai/daftar');
    }
    function edit($id)
    {
        // $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first();
        // print_r($pegawai->pegawai_nama);
        return view('pegawai/edit', ['p' => $pegawai]); 
    }
    function update(Request $request)
    {
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_alamat'=> $request->alamat
        ]);
        return redirect('pegawai');
    }
    function hapus($id)
    {
        DB::table('pegawai')->where('pegawai_id', $id)->delete();
        return redirect('pegawai');
    }

    function cari(Request $request)     
    {
        $cari = $request->cari;

        $pegawai = DB::table('pegawai')
        ->where('pegawai_nama', 'like', '%'.$cari.'%')
        ->paginate();
        return view('pegawai/index', ['pegawai' => $pegawai]);
    }
}
