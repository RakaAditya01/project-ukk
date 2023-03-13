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
        return view('Management.data-user', compact('data'));
    }

    public function tambah(){
        $data = User::all();
        return view('Management.tambah-data-user', compact('data'));
    }

    public function store(request $request){
        $this->validate($request, [
            'nama' => 'required|string|max:225',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8',
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);    
        User::create([
            // 'id_user' => $request->id_user,
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
            // 'pswrd' => $request->password,
            'nisn' => $request->nisn,
            'password' => Hash::make($request['password']),
            'created_at' => now()
        ]);
        
        return redirect('data-user');
    }

    public function viewpuser($id) {
        $data = DB::table('Users')->where('id_user', $id)->first();
        $data = (object)json_decode(json_encode($data), true);
        return view('Management.edit-data-user', ['data'=>$data]);
    }

    public function update(request $request, $id){
        $data = DB::table('Users')->where('id_user', $id);
        $request['password'] = Hash::make($request['password']);
        $abc = $request->except(['_token']);
        $data->update($abc);
        return redirect('data-user');
    }

    public function destroy($id) {
        $data = DB::table('Users')->where('id_user', $id);
        $data->delete();
        return redirect()->route('data-user')->with('toast_succes', 'Data Berhasil DI Hapus!');
    }
    
}
