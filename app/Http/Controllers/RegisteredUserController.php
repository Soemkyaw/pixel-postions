<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required','max:225'],
            'email' => ['required','email','min:6','max:225','unique:users,email'],
            'password' => ['required','confirmed'],
            'employer' => ['required','min:3','max:225'],
            'logo' => ['required','mimes:jpg,jpeg,png']
        ]);

        $userAttributes = [
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'password' => Hash::make($attributes["password"]),
        ];

        $user = User::create($userAttributes);

        $part = $request->file('logo')->store('employer-logos');

        $employerAttributes = [
            'name' => $attributes['employer'],
            'logo' => $part,
        ];

        $user->employer()->create($employerAttributes);

        Auth::login($user);

        return redirect('/');
    }
}
