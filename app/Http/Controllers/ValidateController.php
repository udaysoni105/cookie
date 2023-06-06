<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateController extends Controller
{
    //
    public function showRegistrationForm()
    {
        return view('validate');
    }
    public function register(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8',
    ]);

    // If the validation passes, the validated data will be available in the $validatedData variable.
    // Perform further actions, such as storing data in the database.

    return "Registration successful!";
}
}
