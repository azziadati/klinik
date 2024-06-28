<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function reservasi()
    {
        return view('reservasi');
    }

    public function konsultasi()
    {
        return view('konsultasi');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function signin()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }
}
