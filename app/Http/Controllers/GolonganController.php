<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GolonganController extends Controller
{
    public function index(){
        $golongan = DB::table('tbgolongan')->get();
        return view('golongan',['golongan' => $golongan]);
        }

        
        public function tambah(){
            return view('tambahgolongan');
        }
        
    public function store(Request $request){
            DB::table('tbgolongan')->insert([
                'golongan_nama' => $request->golongan_nama,
                'gaji_pokok' => $request->gaji_pokok,
                'tunjangan_keluarga' => $request->tunjangan_keluarga,
                'tunjangan_transport' => $request->tunjangan_transport,
                'tunjangan_makan' => $request->tunjangan_makan,
            ]);
        
            // Redirect ke halaman pegawai setelah data disimpan
            return redirect('/golongan');
        }    

        public function edit($id)
        {
            // Ambil data dari tabel 'tbgolongan' berdasarkan 'golongan_id'
            $golongan = DB::table('tbgolongan')->where('golongan_id', $id)->first();
            return view('editgolongan', ['golongan' => $golongan]);
        }
        
    
        public function update(Request $request, $id)
        {
            // Update data pada tabel 'tbgolongan'
            DB::table('tbgolongan')->where('golongan_id', $id)->update([
                'golongan_nama' => $request->golongan_nama,
                'gaji_pokok' => $request->gaji_pokok,
                'tunjangan_keluarga' => $request->tunjangan_keluarga,
                'tunjangan_transport' => $request->tunjangan_transport,
                'tunjangan_makan' => $request->tunjangan_makan,
            ]);
        
            return redirect('/golongan');
        }
        
        public function delete($id)
        {
            DB::table('tbgolongan')->where('golongan_id', $id)->delete();
            return redirect('/golongan');
        }
        
}


