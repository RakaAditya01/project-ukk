<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlleer extends Controller
{
    public function index() {
        return view('pages.dashboard-general-dashboard');
    }
}
