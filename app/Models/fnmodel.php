<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class fnmodel extends Model
{
    public function tampil(){
        return DB::table('warga')->get();
    }

    public function cariwarga($cari){
        return DB::table('warga')->where('nama_warga','LIKE','%'.$cari.'%')->get();
    }
    public function tambahwarga($data){
        return DB::table('warga')->insert($data);
     }
}
