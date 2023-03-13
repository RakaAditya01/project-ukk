<?php

namespace App\Http\Controllers;

use Hash, Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Providers\RouteServiceProvider;

class Login2Controller extends Controller
{
    public function login(){
        // dd(Auth::user());
        return view('pages.auth-login2');
    }

    public function loginproses(Request $request)
    {
        // dd($request->all());
        // $data = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        //     // 'expired_at' => 
        // ];
        
        // $user = User::where('email', $request->email)->first();
        // Auth::login($user);
        // // dd(Auth::user());
        // // $request->session()->regenerate();
        // return redirect()->intended(RouteServiceProvider::HOME);    
        // if ($user && Hash::check($request->password, $user->password)) {
        // }else{
        //     session()->flash('error', 'Email atau Password Salah');
        //     return redirect()->back();
        // }
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();   
            // return redirect()->intended(RouteServiceProvider::HOME);
            return redirect('dashboard-general-dashboard');
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
