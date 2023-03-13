<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\User;
use DB, Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $siswa = Siswa::count();
        $user = User::count();
        // dd(Auth::user());
        // session()->put('nama',$user->nama);
        return view('pages.dashboard-general-dashboard', compact('siswa', 'user'));
    }
}
