<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authentication(Request $request)
    {
        if ($request['username'] == 'admin' && $request['password'] == 'admin') {
            return view('admin.indexadmin');
        } else {
            return view('auth.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
