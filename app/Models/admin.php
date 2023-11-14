<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admin extends Model
{
    public function admin(){
        return DB::table('users')->get();
    }
    //nampilkan didashboard
    public function cariadmin($cari){
        return DB::table('users')->where('name','LIKE','%'.$cari.'%')->get();
    }
    public function hapusdata($id){
        DB::table('users')->where('id', $id)->delete();
    }
}
