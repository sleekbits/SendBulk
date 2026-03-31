<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin() { return view('auth.login'); }
    public function showForgot() { return view('auth.forgot'); }
    public function showReset(string $token) { return view('auth.reset', compact('token')); }

    public function login(Request $request): RedirectResponse
    {
        $request->validate(['email' => 'required|email', 'password' => 'required']);
        return redirect()->route('dashboard');
    }

    public function logout(): RedirectResponse { return redirect()->route('login'); }
    public function sendReset(): RedirectResponse { return back()->with('success', 'Reset link sent.'); }
    public function reset(): RedirectResponse { return redirect()->route('login')->with('success', 'Password reset complete.'); }
}
