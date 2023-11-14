<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\warga;
use App\Models\countries;

class wargaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

        $this ->countries = new countries();
        $this ->warga = new warga();
    }
    public function index(){

    $t_warga = [

        't_warga' =>$this->countries->lihat(),
        't_warga' =>$this->warga->tampil(),
        't_warga' => $this->warga->cariwarga(request()->cari),
    ];
    
    return view('warga.warga', $t_warga);
}

public function tambahwarga(){
    $countries = [
    
        'countries' =>$this->countries->lihat(),
    ];

    return view('warga.tambahwarga',$countries);
}

public function savewarga(){
    Request()->validate([
        'nik' => 'required|numeric|',
        'nama_warga' => 'required|max:255',
        'negara' => 'required|max:255|',
        'tanggal_lahir' => 'required|',
        'no_hp' => 'required|numeric',

    ],[
        'nik.required' => 'nik wajib diisi yah',
        'nama_warga.required' => 'nama_warga wajib diisi yah',
        'negara.required' => 'tempat lahir wajib Diisi yah',
        'tanggal_lahir.required' => 'tanggal lahir wajib Diisi yah',
        'no_hp.required' => 'no hp wajib Diisi yah',
    ]);

    $data = [
        'nik'=> request()->nik, 
        'nama_warga'=> request()->nama_warga,
        'negara'=> request()->negara,
        'tanggal_lahir'=>request()->tanggal_lahir,
        'no_hp'=> request()->no_hp,
        'email'=> request()->email,
        
    ];

    $this->warga->addwarga($data);
    return redirect()->route('warga');
}

public function editwarga($nik){
    $countries = [
    
        'countries' =>$this->countries->lihat(),
    ];

    $data = [
        'main' => $this->warga->editwarga($nik),
    ];
    return view('warga.editwarga', $data, $countries);
}

public function updatewarga($nik){

    Request()->validate([
        'nik' => 'required|numeric|',
        'nama_warga' => 'required|max:255',
        'negara' => 'required',
        'tanggal_lahir' => 'required|',
        'no_hp' => 'required|numeric',
    ],[
        'nik.required' => 'nik wajib diisi yah',
        'nama_warga.required' => 'nama_warga wajib diisi yah',
        'negara.required' => 'tempat lahir wajib Diisi yah',
        'tanggal_lahir.required' => 'tanggal lahir wajib Diisi yah',
        'no_hp.required' => 'no hp wajib Diisi yah',
    ]);

    $data = [
        'nik'=> request()->nik, 
        'nama_warga'=> request()->nama_warga,
        'negara'=> request()->negara,
        'tanggal_lahir'=>request()->tanggal_lahir,
        'no_hp'=> request()->no_hp,
        'email'=> request()->email,
        
    ];

    $this->warga->ubahdata($nik, $data);
    return redirect()->route('warga');
}

public function hapuswarga($nik){
    $this->warga->hapusdata($nik);
    return redirect()->route('warga');
}

}



