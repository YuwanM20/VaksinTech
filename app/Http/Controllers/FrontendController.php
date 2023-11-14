<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fnmodel;
use App\Models\countries;
use App\Models\vaksinasi;
use App\Models\petugas;
use App\Mail\lihatContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function __construct(){
      
        $this ->countries = new countries();
        $this ->fnmodel = new fnmodel();
        $this ->petugas = new petugas();
        $this ->vaksinasi = new vaksinasi();


    }
    public function index(){

        $data = [
    
            't_petugas'=>$this->petugas->petugas(),
            't_vaksin' =>$this->vaksinasi->suntik(),
            't_warga' => $this->fnmodel->tampil(),
            // 't_warga' => $this->warga->tampil(),
            't_warga' => $this->fnmodel->cariwarga(request()->cari),
        ];
        
        return view('frontend.frontend',$data);
    }

    public function tambahwarga(){
        $data = [
        
            't_countries' =>$this->countries->lihat(),
        ];
    
        return view('frontend.fnaddwarga',$data);
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
    
        $this->fnmodel->tambahwarga($data);
        return redirect()->route('frontend');
    }

    public function submitcontact(Request $request)
    {
      $data = [
        'name' => $request->name,
        'email' =>$request->email,
        'subject' =>$request->subject,
        'message' =>$request->message,
      ];

      Mail::to('anyougitr@gmail.com')->send (new lihatContact($data));

      Session::flash('message', 'Terima kasih telah memberi saran');
      return redirect()->route('frontend');
    }


}