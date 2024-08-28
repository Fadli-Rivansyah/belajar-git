<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
 
class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function save(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required_with:password|same:password|min:8|required',
        ]);

        
    }
}
