<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class petugas extends Model
{
    public function petugas(){
        return DB::table('petugas')->get();
    }

    public function addpetugas($data){
        return DB::table('petugas')->insert($data);
     }

     public function hapusdata($id_petugas){
        DB::table('petugas')->where('id_petugas', $id_petugas)->delete();
    }
    public function editpetugas($id_petugas){
        return DB::table('petugas')->where('id_petugas', $id_petugas)->first();
    }
    public function ubahdata($id_petugas, $data){
        DB::table('petugas')->where('id_petugas', $id_petugas)->update($data);
    }
    public function DetailData($id_petugas){
        return DB::table('petugas')
        ->where('id_petugas',$id_petugas)->first();
    }
}
