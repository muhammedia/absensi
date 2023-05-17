<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.halamanLogin');
    }

    public function halamanDaftar()
    {
        return view('auth.halamanDaftar');
    }

    public function fungsiLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $auth = Auth::user();
            $request->session()->regenerate();

            if ($auth->role == 'Guru') {
                return redirect('dashboard');
            } else if ($auth->role == 'Wali') {
                return redirect('dashboard');
            }
        }
        return back()->with(['message' => 'Username atau Kata Sandi Salah']);
    }

    public function fungsiDaftar(Request $request)
    {
        $this->validate($request, [
            'username' => 'required', 'min:6',
            'password' => 'required', 'min:6',
        ]);

        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role' => 'Wali',
            'remember_token' => Str::random(60),
        ]);

        return redirect('halamanLogin');
    }
}