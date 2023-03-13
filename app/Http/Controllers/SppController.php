<?php

namespace App\Http\Controllers;

use App\Models\spp;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index() {
        $data = spp::paginate(9999999999);
        return view('Spp.data-spp', compact('data'));
    }

    public function tambah() {
        $data = spp::all();
        return view('Spp.tambah-data-spp', compact('data'));
    }

    public function store(request $request) {
        $this->validate($request, [
            'tahun' => 'required|numeric',
            'nominal' => 'required|numeric'
        ],
        [
            'tahun.required' => 'Tahun Tidak Boleh Kosong',
            'nominal.required' => 'Nominal Tidak Boleh Kosong',
        ]);
        spp::create([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
            'created_at' => now(),
        ]);
        return redirect('data-spp');
    }

    public function viewspp($id) {
        $data = DB::table('spps')->where('id_spp', $id)->first();
        $data = (object)json_decode(json_encode($data), true);
        return view('Spp.edit-data-spp', ['data'=>$data]);
    }

    public function update(request $request, $id) {
        $data = DB::table('spps')->where('id_spp', $id);
        $abc = $request->except(['_token']);
        $data->update($abc);
        return redirect('data-spp');
    }

    public function destroy($id) {
        $data = DB::table('spps')->where('id_spp', $id);
        $data->delete();
        return redirect()->route('data-spp');
    }
}
