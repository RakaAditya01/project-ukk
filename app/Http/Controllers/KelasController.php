<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use illuminate\Validation\Rules;

class KelasController extends Controller
{
    public function index() {
        $data = Kelas::paginate(9999999999);
        return view('Kelas.data-kelas', compact('data'));
    }

    public function tambah() {
        $data = Kelas::all();
        return view('Kelas.tambah-data-kelas', compact('data'));
    }

    public function store(request $request) {
        $this->validate($request, [
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required',
        ],
        [
            'nama_kelas.required' => 'Nama Kelas Tidak Boleh Kosong',
            'kompetensi_keahlian.required' => 'Kompetensi Keahlian Tidak Boleh Kosong'
        ]);
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            'created_at' => now(),
        ]);
        return redirect('data-kelas');
    }

    public function viewkelas($id) {
        $data = DB::table('Kelas')->where('nama_kelas', $id)->first();
        $data = (object)json_decode(json_encode($data), true);
        return view('Kelas.edit-data-kelas', ['data'=>$data]);
    }

    public function update(request $request, $id) {
        $data = DB::table('Kelas')->where('nama_kelas', $id);
        $abc = $request->except(['_token']);
        $data->update($abc);
        return redirect('data-kelas');
    }

    public function destroy($id) {
        $data = DB::table('Kelas')->where('nama_kelas', $id);
        $data->delete();
        return redirect()->route('data-kelas');
    }
}
