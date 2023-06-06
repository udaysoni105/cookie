<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PopController extends Controller
{
    //
    public function pop()
    {
        $data = User::all();
        return view('popup', compact('data'));
    }

    public function up(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            // Add validation rules for other fields as needed
        ]);

        User::create($request->all());

        return response()->json(['success' => 'Data added successfully.']);
    }
}
