<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:kepala klinik');
    }

    public function index()
    {
        return view('kepala.dashboard');
    }

    // Tambahkan metode lain sesuai kebutuhan
}
