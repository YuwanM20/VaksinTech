<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\petugas;


class PetugasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this ->petugas = new petugas();
    }

    public function index(){
        $petugas = [
            'petugas'=>$this->petugas->petugas(),
        ];
        return view('petugas.petugas', $petugas);
    }

    public function addpetugas(){
        return view('petugas.tambahpetugas');
    }

    public function savepetugas(){
        Request()->validate([
            'nama_petugas' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|min:8',
            'status' => 'required|max:255',
        ],[
            'nama_petugas.required' => 'nama wajib diisi yah',
            'username.required' => 'username wajib diisi yah',
            'password.required' => 'pasword minimal 8 karakter yah',
            'status.required' => 'wajib dipilih status yah',
        ]);

        $data = [
            'nama_petugas'=> request()->nama_petugas, 
            'username'=> request()->username,
            'password'=> request()->password,
            'status'=>request()->status,
        ];

        $this->petugas->addpetugas($data);
        return redirect()->route('petugas');
    }

    public function hapuspetugas($id_petugas){
        $this->petugas->hapusdata($id_petugas);
        return redirect()->route('petugas');
    }

    public function editpetugas($id){
        $data = [
            'main' => $this->petugas->editpetugas($id),
        ];
        return view('petugas.editpetugas', $data);
    }
    public function updatepetugas($id_petugas){
        Request()->validate([
            'nama_petugas' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|min:8',
            'status' => 'required',
        ],[
            'nama_petugas.required' => 'nama wajib diisi yah',
            'username.required' => 'username wajib diisi yah',
            'password.required' => 'pasword minimal 8 karakter yah',
            'status.required' => 'wajib dipilih status yah',
        ]);

        $data = [
            'nama_petugas'=> request()->nama_petugas, 
            'username'=> request()->username,
            'password'=> request()->password,
            'status'=>request()->status,
        ];

        $this->petugas->ubahdata($id_petugas, $data);
        return redirect()->route('petugas');
    }



}
