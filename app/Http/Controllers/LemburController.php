<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LemburController extends Controller
{
    public function index(){
        $lembur = DB::table('tblembur')->get();
        return view('lembur', ['lembur' => $lembur]);
    }

    public function tambah(){
        return view('tambahlembur');
    }
    
    public function store(Request $request){
        DB::table('tblembur')->insert([
            'id_pegawai' => $request->id_pegawai,
            'bulan_lembur' => $request->bulan_lembur,
            'jumlah_lembur' => $request->jumlah_lembur,
        ]);
    
        return redirect('/lembur');
    }

    public function edit($id)
    {
        $lembur = DB::table('tblembur')->where('lembur_id', $id)->first();
        return view('editlembur', ['lembur' => $lembur]);
    }

    public function update(Request $request)
    {
        DB::table('tblembur')->where('lembur_id', $request->id)->update([
            'id_pegawai' => $request->id_pegawai,
            'bulan_lembur' => $request->bulan_lembur,
            'jumlah_lembur' => $request->jumlah_lembur,
        ]);

        return redirect('/lembur');
    }

    public function delete($id)
    {
        DB::table('tblembur')->where('lembur_id', $id)->delete();
        return redirect('/lembur');
    }
}
