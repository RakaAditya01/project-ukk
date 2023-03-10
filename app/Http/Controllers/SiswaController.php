<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\kelas;
use App\Models\spp;
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
        $data = kelas::all();
        $spp = spp::all();
        // dd($data, $value);
        return view('Admin.tambah-data-siswa', compact('data', 'spp'));
    }

    public function store(request $request) {
        // dd([
        //     'nisn' => $request->nisn,
        //     'nis' => $request->nis,
        //     'nama' => $request->nama,
        //     'id_kelas' => $request->id_kelas,
        //     'alamat' => $request->alamat,
        //     'no_telp' => $request->no_telp,
        //     'nominal' => $request->nominal,
        //     'created_at' => now(),
        // ]);
        $this->validate($request, [
            'nisn' => 'required|numeric',
            'nis' => 'required|numeric',
            'nama' => 'required|string|max:225',
            'id_kelas' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
            'nominal' => 'required|integer',
        ],
        [
            'nisn.required' => 'NISN Tidak Boleh Kosong',
            'nis.required' => 'NIS Tidak Boleh Kosong',
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'id_kelas.required' => 'Kelas Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'no_telp.required' => 'No Telepon Tidak Boleh Kosong',
            'nominal.required' => 'SPP Tidak Boleh Kosong'
        ]);
        siswa::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->nominal,
            'created_at' => now(),
        ]);
        return redirect('data-siswa');
    }

    public function viewsiswa($id) {
        $data = DB::table('siswas')->where('nisn', $id)->first();
        $data = (object)json_decode(json_encode($data), true);
        return view('Admin.edit-data-siswa', ['data'=>$data]);
    }

    public function update(request $request, $id){
        $data = DB::table('siswas')->where('nisn', $id);
        $abc = $request->except(['_token']);
        $data->update($abc);
        return redirect('data-siswa');
    }

    public function destroy($id) {
        $data = DB::table('siswas')->where('nisn', $id);
        $data->delete();
        return redirect()->route('data-siswa');
    }
}