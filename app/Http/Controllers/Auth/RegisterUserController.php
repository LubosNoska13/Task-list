<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:3|max:20|unique:users,name",
            "email" => "required|email|string|lowercase|unique:users,email",
            "password" => "required|confirmed|min:6"
        ]);

        $name = strip_tags($request->name);
        $email = strip_tags($request->email);

        $user = User::create([
            "name" => $name,
            "email" => $email,
            "password" => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'An account has been created successfully.');
    }
}
