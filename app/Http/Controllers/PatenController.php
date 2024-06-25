<?php

namespace App\Http\Controllers;

use App\Models\Paten;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PatenController extends Controller
{
    public function index(){
        return view('paten.index');
    }

    public function simpan(Request $request){
        $this->validate($request,[
            'judul'=>'required|string|max:100|unique:patens,judul',
            'abstrak'=>'required|mimes:pdf,doc,docx',
            'klaim'=>'required|mimes:pdf,doc,docx',
            'nama_inventor'=>'required|string|max:100',
            'alamat_inventor'=>'required|string',
            'nohp_inventor'=>'required|string',

        ]);
        try{
            $abstrak = NULL;
        if($request->hasFile('abstrak')){
            $file = $request->file('abstrak');
            $abstrak=time() . '-Abstrak-' . Str::slug($request->judul) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/abstrak',$abstrak);
        }
        $klaim = NULL;
        if($request->hasFile('klaim')){
            $file = $request->file('klaim');
            $klaim=time() . '-Klaim-' . Str::slug($request->judul) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/klaim',$klaim);
        }

        Paten::create([
            'judul'=>$request->judul,
            'nomor'=>'-',
            'nama_inventor'=>$request->nama_inventor,
            'alamat_inventor'=>$request->alamat_inventor,
            'nohp_inventor'=>$request->nohp_inventor,
            'program_studi_inventor'=>$request->program_studi_inventor,
            'jurusan_inventor'=>$request->jurusan_inventor,
            'abstrak'=>$abstrak,
            'klaim'=>$klaim,
        ]);
        return redirect()->back()->with(['succsess'=>'Pendaftaran Berhasil']);
        }catch(\Exception $e){
            return redirect()->back()->with(['error'=>'Pendaftaran Gagal: '.$e->getMessage()]);
        }
        
    }
}
