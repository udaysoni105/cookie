<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function addUser(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect()->back();
    }
    public function users()
    {
        $users = User::all();
        return view('users',compact('users'));
    }
}
