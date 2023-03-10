<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view ('pages.auth-register');
    }

    public function registeruser(Request $request){
        // dd($request);
        $request-> validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::min(8)],
        ]);

        $user = User::insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'pswrd' => $request->password,
            'remember_token' => Str::random(60),
            'created_at'=> now(),
        ]);
        $User = User::where('nama', $request->get('user'))->first();
        if (!empty($User));
        return redirect('/auth-login2');
        if (!Hash::check(request ('password'), $User->password)) {
        return new Response('Invalid Password');
        }
    }
}
