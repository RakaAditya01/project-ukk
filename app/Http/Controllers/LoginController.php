<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    public function login(){
        return view('/dashboard-general-dashboard');
    }

    public function loginproses(Request $request)
    {
        $data = [
            'ussername' => $request->input('username'),
            'password' => $request->input('password'),
            // 'expired_at' => 
        ];

        if (Auth::Attempt($data)) {
            $username = $request->input('username');
            $user = User::where('username', $username)->first();
            session()->put('name',$user->name);
            return redirect('/dashboard-general-dashboard');    
        }else{
            session()->flash('error', 'Username atau Password Salah');
            return redirect()->back();
        }
    }
}
