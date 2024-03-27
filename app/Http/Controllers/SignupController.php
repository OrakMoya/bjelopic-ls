<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;

class SignupController extends Controller
{

    public function show(): Response{
        return Inertia::render("Register");
    }
    public function store(Request $request): RedirectResponse{
        $request->validate([
            'username' => ['required', 'min:3', 'max:50'],
            'email' => ['required', 'email', 'min:5', 'max:50'],
            'password' => ['required', 'confirmed']
        ]);

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->api_token = Str::random(60);
        $user->save();
        return redirect("login")->with("status", "Signup complete!");
    }
}
