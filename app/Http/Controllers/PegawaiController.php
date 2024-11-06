<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = DB::table('tbpegawai')->get();
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function tambah(){
        return view('tambahpegawai');
    }

    public function store(Request $request){
        DB::table('tbpegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai = DB::table('tbpegawai')->where('pegawai_id', $id)->first();
        return view('editpegawai', ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
        DB::table('tbpegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function delete($id)
    {
        DB::table('tbpegawai')->where('pegawai_id', $id)->delete();
        return redirect('/pegawai');
    }
}


