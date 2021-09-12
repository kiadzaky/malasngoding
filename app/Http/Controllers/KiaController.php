<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class KiaController extends Controller
{
    public function index(){
        // $data = [
        //     'nama' => 'Kia Dzaky Eriyoko',
        //     'hobi' => 'Olahraga'
        //     ];
        $nama = "Kia Dzaky Eriyoko";
        $hobi = ["Olahraga", "Bermain Game", "Belajar"];
        $data = [
            'nama'=>$nama,
            'hobi'=>$hobi,
        ];
        return view('kia/index', $data);
    }

    function pendaftaran()
    {
        return view('kia/pendaftaran');
    }
    function proses(Request $request)
    {
        $nama = $request->input('nama', 'default');
        $alamat = $request->input('alamat', 'default');
        return "nama:".$nama."alamat:".$alamat;
    }
}