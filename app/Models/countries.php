<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class countries extends Model
{
    public function lihat(){
        return DB::table('countries')->get();
    }
    public function DetailData($nik){
        return DB::table('countries')
        ->where('name','country_code',$name ,$country_code)->first();
    }

}
