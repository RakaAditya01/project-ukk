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
        $request-> validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required','confirmed', Rules\Password::min(8)],
        ]);

        $user = User::insert([
            'username' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'remember_token' => Str::random(60),
            'created_at'=> now(),
        ]);
        $User = User::where('username', $request->get('user'))->first();
        if (!empty($User) && $User->expired_at );
        return redirect('/auth-login2');
        if (!Hash::check(request ('password'), $User->password)) {
        return new Response('Invalid Password');
        }
    }
}
