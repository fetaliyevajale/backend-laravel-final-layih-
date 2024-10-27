<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // login görünüşünü qaytar
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // İstifadəçinin daxil olduğu məlumatları yoxla
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Daxil olduqda yönləndir
            return redirect()->route('admin.dashboard'); // admin dashboarduna yönləndirin
        }

        // Giriş uğursuz olarsa, geri qaytar
        return back()->withErrors([
            'email' => 'Daxil etdiyiniz məlumatlar yanlışdır.',
        ]);
    }
}
