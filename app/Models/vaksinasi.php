<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class vaksinasi extends Model
{
    public function suntik(){
        return DB::table('vaksinasi')
        ->join('warga','warga.nik','vaksinasi.nik_warga')
        ->join('petugas','petugas.id_petugas','vaksinasi.id_petugas')// ngambil id petugas
        ->get();
    }
    
    public function cariData($cari){
        return DB::table('vaksinasi')
        ->where('nama_warga','LIKE','%'.$cari.'%')
        ->join('warga','warga.nik','vaksinasi.nik_warga')
        ->join('petugas','petugas.id_petugas','vaksinasi.id_petugas')// ngambil id petugas
        ->get();
    }
    public function addvaksin($data){
        return DB::table('vaksinasi')->insert($data);
     }
     public function hapusdata($id){
        DB::table('vaksinasi')->where('id_vaksinasi', $id)->delete();
    }
}
