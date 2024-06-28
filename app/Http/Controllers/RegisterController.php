<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Hitung jumlah user yang sudah terdaftar
        $userCount = User::count();

        // Tentukan role_id berdasarkan jumlah user
        if ($userCount == 0) {
            $role_id = 1; // Admin
        } elseif ($userCount == 1) {
            $role_id = 2; // Staff
        } else {
            $role_id = 3; // User
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => $role_id,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            return redirect()->route('login')->with('success', 'Register berhasil, silahkan login');
        } else {
            return redirect()->back()->with('error', 'Register gagal, silahkan coba lagi');
        }
    }
}
