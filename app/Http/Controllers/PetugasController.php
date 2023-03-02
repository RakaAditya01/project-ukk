<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class PetugasController extends Controller
{
    public function index(){
        $data = User::paginate(9999999999);
        return view('Admin.data-petugas', compact('data'));
    }

    public function tambah(){
        $data = User::all();
        return view('Admin.tambah-data-petugas', compact('data'));
    }

    public function store(request $request){
        $this->validate($request, [
            'id_petugas' => 'required',
            'nama' => 'required|string|max:225',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8',
        ],
        [
            'id_petugas.required' => 'ID tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);
        User::create([
            'id_petugas' => $request->id_petugas,
            'nama' => $request->nama,
            'email' => $request->email,
            'level' => $request->level,
            'pswrd' => $request->password,
            'password' => Hash::make($request['password']),
            'created_at' => now(),
        ]);
        return redirect('data-petugas');
    }

    public function viewpetugas($id) {
        $data = DB::table('Users')->where('id_petugas', $id)->first();
        $data = (object)json_decode(json_encode($data), true);
        return view('Admin.edit-data-petugas', ['data'=>$data]);
    }

    public function update(request $request, $id){
        $data = DB::table('Users')->where('id_petugas', $id);
        $request['password'] = Hash::make($request['password']);
        $abc = $request->except(['_token']);
        $data->update($abc);
        return redirect('data-petugas');
    }

    public function destroy($id) {
        $data = DB::table('Users')->where('id_petugas', $id);
        $data->delete();
        return redirect()->route('data-petugas')->with('toast_succes', 'Data Berhasil DI Hapus!');
    }
    
}
