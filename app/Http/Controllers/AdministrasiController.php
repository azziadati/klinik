<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:administrasi');
    }

    public function index()
    {
        return view('administrasi.dashboard');
    }

    // Tambahkan metode lain sesuai kebutuhan
}
