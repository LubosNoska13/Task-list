<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login() {
        return view('login');
    }

    public function loginDb(Request $request) {
        $data = $request->validate([
            "name" => "required|min:3|max:25",
            "password" => "required|min:6|max:20"
        ]);
        
        $data["name"] = strip_tags($data["name"]);
        $data["password"] = strip_tags($data["password"]); 

        if (auth()->attempt(["name" => $data["name"], "password" => $data["password"]])){
            return redirect()->route("tasks.index")->with("success", "You are now login");
        }
    }

    public function register() {
        return view('register');
    }

    public function registerDb(Request $request) {
        $data = $request->validate([
            "name" => "required|min:3|max:25|unique:users,name",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:6|max:20"
        ]);

        $data["name"] = strip_tags($data["name"]);
        $data["email"] = strip_tags($data["email"]);
        $data["password"] = strip_tags($data["password"]);
        $data["password"] = bcrypt($data["password"]);
        
        $user = User::create($data);

        auth()->login($user);

        return redirect()->route("tasks.index")->with("success", "An account successfully created.");
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('login');
    }
}
