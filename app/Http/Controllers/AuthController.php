<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        echo 'ana hna';
        $donnes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($donnes)) {
            $request->session()->regenerate();
            if(Auth::user()->role==='admin'){
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('student.dashboard');
            
        }
        return redirect()->back()->with('error', 'email ou mot de pass incorrect');
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index')
            ->with('success', 'Déconnexion réussie');
    }
}
