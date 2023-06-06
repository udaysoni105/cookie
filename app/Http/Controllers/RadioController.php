<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RadioController extends Controller
{
    //
    public function radio()
    {
        return view('radiobutton');
    }
    public function add(Request $request)
    {
        $request->validate
        ([
            'qty1'=>'required|numeric',
            'qty2'=>'required|numeric',
        ]);
        $qty1 = $request->input('qty1');
        $qty2 = $request->input('qty2');

        if ($qty1 > $qty2) 
        {
            // Perform further processing or submit the form
            return redirect()->back()->withSuccess('Form submitted successfully.');
        } else 
        {
            return redirect()->back()->withErrors('Qty1 must be greater than Qty2.');
        }
    }
}
