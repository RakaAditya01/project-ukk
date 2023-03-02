<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\kelas;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Auth;
use illuminate\Validation\Rules;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $data = siswa::paginate(9999999999);
        return view('Admin.data-siswa', compact('data'));
    }

    public function tambah() {
        $data = siswa::all();
        return view('Admin.tambah-data-siswa', compact('data'));
    }

    public function store(request $request) {
        $this->validate($request, [
            'nisn' => 'required|numeric',
            'nis' => 'required|numeric',
            'nama' => 'required|string|max:225',
            'nama_kelas' => 'required|integer',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
            'id_spp' => 'required|integer',
        ],
        [
            'nisn.required' => 'Nisn Tidak Boleh Kosong',
            'nis.required' => 'NIS Tidak Boleh Kosong',
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'nama_kelas.required' => 'Kelas Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'no_telp.required' => 'No Telepon Tidak Boleh Kosong',
            'id_spp.required' => 'SPP Tidak Boleh Kosong'
        ]);
        siswa::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'nama_kelas' => $request->nama_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
            'created_at' => now(),
        ]);
        return redirect('data-siswa');
    }
}