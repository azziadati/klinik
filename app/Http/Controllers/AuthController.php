<?php

// app/Http/Controllers/AuthController.php

// app/Http/Controllers/AuthController.php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {
        // Validasi data yang dimasukkan
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat pengguna baru
        $user = User::create([
            'fname' => $validatedData['fname'],
            'lname' => $validatedData['lname'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Loginkan pengguna (opsional)
        Auth::login($user);

        // Redirect ke rute yang diinginkan dengan pesan sukses
        return redirect()->route('home')->with('success', 'Pendaftaran berhasil!');
    }
}
