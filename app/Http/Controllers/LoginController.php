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
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            // 'expired_at' => 
        ];

        if (Auth::Attempt($data)) {
            $email = $request->input('email');
            $user = User::where('email', $email)->first();
            session()->put('role',$user->role);
            // session()->put('role',$user->role);
            // dd($user->name);
            return redirect('/dashboard-general-dashboard');    
        }else{
            session()->flash('error', 'Email atau Password Salah');
            return redirect()->back();
        }

        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/auth-login2')->with('logout','logout success!!');
    }
}
