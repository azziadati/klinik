<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:pasien');
    }

    public function index()
    {
        return view('pasien.dashboard');
    }

    // Tambahkan metode lain sesuai kebutuhan
}
