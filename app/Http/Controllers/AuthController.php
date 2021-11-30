<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true) {
            return redirect()->route('admin.show');
        }

        return redirect()->route('admin.login');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return view('home');
    }

    public function showLoginForm()
    {
        return view('admin.loginForm');
    }

    public function login(Request $request)
    {
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->withErrors(['O email informado não é válido']);
        }
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.show');
        }

        return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }
}
