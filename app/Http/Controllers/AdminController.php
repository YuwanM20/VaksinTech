<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this ->admin = new admin();
    }

    public function index(){
        $dokter = [
            'dokter'=>$this->admin->admin(),
            'dokter' => $this->admin->cariadmin(request()->cari),
        ];
        return view('dokter.dokter', $dokter);
    }
    public function hapusadmin($id){
        $this->admin->hapusdata($id);
        return redirect()->route('admin');
    }
}
