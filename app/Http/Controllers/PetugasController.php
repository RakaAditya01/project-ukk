<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class PetugasController extends Controller
{
    public function index(){
        return view('Admin.data-petugas');
    }

    public function tambah(){
        return view('Admin.tambah-data-petugas');
    }

    public function strore(request $request){
        $this->validate($request, [
            'id_petugas' => 'required',
            'nama' => 'required',
            'level' => 'required',
        ]);
        $user = User::insert([
            'nama' => $request
        ]);
    }
    
}
