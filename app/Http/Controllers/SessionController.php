<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }


    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'email' => ['required','min:3','max:225','email'],
            'password' => ['required','min:6','max:225'],
        ]);

        if (!Auth::attempt($userAttributes)) {
            throw ValidationException::withMessages([
                'email' => "Sorry, those credentials do not match."
            ]);
        };

        request()->session()->regenerate();

        return redirect('/');
    }


    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
