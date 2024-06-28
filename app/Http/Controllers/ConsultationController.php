<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::where('user_id', Auth::id())->orWhere('is_admin', true)->get();
        return view('consultations.index', compact('consultations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        Consultation::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
            'is_admin' => false,
        ]);

        return redirect()->back();
    }
}
