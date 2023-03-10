<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $siswa = Siswa::count();
        $user = User::count();
        // session()->put(
        //     'email',$user->email
        // );
        return view('pages.dashboard-general-dashboard', compact('siswa', 'user'));
    }
}
