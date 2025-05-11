<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showRegisterForm() {
        return view("auth/register");
    }
    public function register(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',

        'bio' => 'required|string',
        'avatar' => 'nullable|image|max:2048',

        'instagram' => 'required|url',
        'website' => 'required|url',
        'linkedin' => 'required|url',
        'github' => 'required|url',
    ]);

    $avatarPath = null;
    if ($request->hasFile('avatar')) {
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
    }

    $user = User::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'bio' => $request->bio,
        'avatar' => $avatarPath,

        'instagram' => $request->instagram,
        'website' => $request->website,
        'linkedin' => $request->linkedin,
        'github' => $request->github,
    ]);

    Auth::login($user);

    return redirect('/dashboard');
    }


public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');

}

}
