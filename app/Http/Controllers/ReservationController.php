<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        // Memanggil view reservasi.blade.php
        return view('reservasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_catatan_medik' => 'required',
            'booking_tanggal' => 'required|date',
        ]);

        // Simpan data reservasi ke dalam database
        Reservation::create([
            'id_catatan_medik' => $request->id_catatan_medik,
            'booking_tanggal' => $request->booking_tanggal,
        ]);

        return redirect()->route('reservasi.index')
            ->with('success', 'Reservasi berhasil dibuat!');
    }
}
