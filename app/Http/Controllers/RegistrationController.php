<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index', [
            'judul' => 'Registration'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            // 'username' => 'required|min:8|max:16|unique:users',
            'nip' => 'required|numeric',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:16'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('status', 'Registration Successfull Please Login');
    }
}
