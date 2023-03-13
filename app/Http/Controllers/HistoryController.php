<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index() {
        $user = Auth::user()->nisn;
        $data = Pembayaran::where('nis' ,'=', "$user")->paginate(9999999999);
        return view ('History.history-pembayaran-siswa', compact('data'));
    }

    
}
