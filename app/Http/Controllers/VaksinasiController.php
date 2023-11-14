<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vaksinasi;
use App\Models\warga;
use App\Models\petugas;


class VaksinasiController extends Controller
{
        // MANGGIL MODEL
        public function __construct(){
            $this->middleware('auth');
            $this->petugas = new petugas();
            $this->vaksinasi = new vaksinasi();
            $this->warga = new warga();// menghubungkan 2 model
        }

        public function index(){
            $t_vaksin = [
                't_vaksin'=>$this->vaksinasi->suntik(),
                't_vaksin' =>$this->vaksinasi->cariData(request()->cari),
            ];
            return view('vaksin.vaksin', $t_vaksin); //menghubungkan/menampilkan ke blade.php
        }

        public function addvaksin(){
            $petugas = [
                'petugas'=>$this->petugas->petugas(),
            ];
            $warga = [
                'warga' =>$this->warga->tampil(),
            ];

            return view('vaksin.addvaksin', $petugas,$warga);
        
    }
    public function savevaksin(){

        Request()->validate([
            'nik' => 'required',
            'tanggal_vaksin'=>'required',
            'deskripsi_priode' => 'required',
            'id_petugas' => 'required',
        
        ]);

        $data = $this->warga->DetailData(request()->nik);

        $data = [
            'deskripsi_priode'=>request()->deskripsi_priode,
            'tanggal_vaksin'=>request()->tanggal_vaksin,
            'nik_warga'=>request()->nik,
            'id_petugas'=>request()->id_petugas,
            
        ];

        $this->vaksinasi->addvaksin($data);
        return redirect()->route('vaksinasi');// NAME ROUTE 
    }

    public function hapusvaksin($id){
        $this->vaksinasi->hapusdata($id);
        return redirect()->route('vaksinasi');
    }
}
