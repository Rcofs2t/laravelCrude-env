<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GajiController extends Controller
{
    public function index()
    {
        $gaji = DB::table('tbgaji')->get();
        return view('gaji', ['gaji' => $gaji]);
    }

    public function tambah()
    {
        return view('tambahgaji');
    }

    public function store(Request $request)
    {
        DB::table('tbgaji')->insert([
            'pegawai_id' => $request->pegawai_id,
            'jumlah_gaji' => $request->jumlah_gaji,
            'jumlah_lembur' => $request->jumlah_lembur,
            'potongan' => $request->potongan,
            'gaji_diterima' => $request->gaji_diterima,
            'tanggal_gaji' => $request->tanggal_gaji,
        ]);
    
        return redirect('/gaji');
    }    

    public function edit($id)
    {
        $gaji = DB::table('tbgaji')->where('gaji_id', $id)->first();
        return view('editgaji', ['gaji' => $gaji]);
    }

    public function update(Request $request, $id)
    {
        DB::table('tbgaji')->where('gaji_id', $id)->update([
            'pegawai_id' => $request->pegawai_id,
            'jumlah_gaji' => $request->jumlah_gaji,
            'jumlah_lembur' => $request->jumlah_lembur,
            'potongan' => $request->potongan,
            'gaji_diterima' => $request->gaji_diterima,
            'tanggal_gaji' => $request->tanggal_gaji,
        ]);

        return redirect('/gaji');
    }

    public function delete($id)
    {
        DB::table('tbgaji')->where('gaji_id', $id)->delete();
        return redirect('/gaji');
    }
}
