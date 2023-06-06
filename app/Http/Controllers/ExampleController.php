<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function showExample()
    {
        $name = '<strong>John Doe</strong>';
        return view('example', compact('name'));
    }
}
