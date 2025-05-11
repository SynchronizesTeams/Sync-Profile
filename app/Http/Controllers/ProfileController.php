<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit() {
        return view('update');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:6',
    
            'bio' => 'required|string',
            'avatar' => 'nullable|image|max:2048',
    
            'instagram' => 'required|url',
            'website' => 'required|url',
            'linkedin' => 'required|url',
            'github' => 'required|url',
        ]);
    
        $user = Auth::user();
    
        // Handle avatar upload jika ada file baru
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $avatarPath;
        }
    
        // Update data
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->instagram = $request->instagram;
        $user->website = $request->website;
        $user->linkedin = $request->linkedin;
        $user->github = $request->github;
    
        // Jika password diisi, update
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        $user->save();
    
        return redirect('/dashboard')->with('success', 'Profile updated successfully.');
    }

    public function show($username)
{
    $user = User::where('username', $username)->firstOrFail();

    return view('profiles/public', compact('user'));
}
}
