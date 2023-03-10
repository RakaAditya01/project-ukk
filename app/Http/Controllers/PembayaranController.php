<?php

namespace App\Http\Controllers;

use App\Models\spp;
use App\Models\pembayaran;
use Illuminate\Support\Facades\DB;
use illuminate\Validation\Rules;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index() {
        $data = pembayaran::paginate(9999999999);
        return view('Pembayaran.data-pembayaran', compact('data'));
    }

    public function tambah() {
        $data = pembayaran::all();
        $data = spp::all(); 
        return view('Pembayaran.tambah-pembayaran', compact('data'));
    }

    public function store(request $request) {
        // dd([ 'id_petugas' => $request->id_petugas,
        // 'nis' => $request->nis,
        // 'spp_bulan' => $request->spp_bulan,
        // 'jumlah_bayar' => $request->jumlah_bayar,
        // 'id_spp' => $request->nominal,
        // 'created_at' => now(),]);
        $this->validate($request, [
            'id_user' => 'required|integer',
            'nis' => 'required|numeric',
            'spp_bulan' => 'required|string',
            'nominal' => 'required|integer',
            'jumlah_bayar' => 'required|string',
        ],
        [
            'id_user.required' => 'ID User Tidak Boleh Kosong',
            'nis.required' => 'NIS Tidak Boleh Kosong',
            'spp_bulan.required' => 'SPP Tidak Boleh Kosong',
            'nominal.required' => 'SPP Tidak Boleh Kosong',
            'jumlah_bayar.required' => 'Jumlah Tidak Boleh Kosong'
        ]);
        
        pembayaran::create([
            'id_user' => $request->id_user,
            'nis' => $request->nis,
            'spp_bulan' => $request->spp_bulan,
            'jumlah_bayar' => $request->jumlah_bayar,
            'id_spp' => $request->nominal,
            'created_at' => now(),
        ]);
        return redirect('data-pembayaran');
    }

    public function viewpembayaran($id) {
        $data = DB::table('pembayarans')->where('id_user', $id)->first();
        $data = (object)json_decode(json_encode($data), true);
        return view('Pembayaran.edit-data-pembayaran', ['data'=>$data]);
    }

    public function update(request $request, $id){
        $data = DB::table('pembayarans')->where('id_user', $id);
        $abc = $request->except(['_token']);
        $data->update($abc);
        return redirect('data-pembayaran');
    }

    public function destroy($id){
        $data = DB::table('pembayarans')->where('id_user', $id);
        $data->delete();
        return redirect()->route('data-pembayaran');
    }
}
