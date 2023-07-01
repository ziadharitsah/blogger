<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegiterController extends Controller
{
    public function index ()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name'          => 'required|string|max:255',
            'email'         => 'required|string|email|unique:users',
            'password'      => 'required|min:8|confirmed'
        ]);
        // store user
        User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password)
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect('dashboard');
    }
}
