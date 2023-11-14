<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class warga extends Model
{
    public function tampil(){
        return DB::table('warga')->get();
    }

    public function addwarga($data){
        return DB::table('warga')->insert($data);
     }

     public function editwarga($nik){
        return DB::table('warga')->where('nik', $nik)->first();
    }
    public function ubahdata($nik, $data){
        DB::table('warga')->where('nik', $nik)->update($data);
    }
    
    public function hapusdata($nik){
        DB::table('warga')->where('nik', $nik)->delete();
    }

    public function cariwarga($cari){
        return DB::table('warga')->where('nama_warga','LIKE','%'.$cari.'%')->get();
    }
    public function DetailData($nik){
        return DB::table('warga')
        ->where('nik',$nik)->first();
    }
}
