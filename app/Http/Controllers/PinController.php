<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinController extends Controller
{
    public function showForm()
    {
        return view('pin');
    }

    public function verifyPin(Request $request)
    {
        $pin = $request->input('pin');
        $pinRahasia = '1111'; // Replace '1234' with the correct PIN

        if ($pin === $pinRahasia) {
            return redirect()->intended();
        } else {
            return redirect()->route('home')->with('error', 'PIN anda salah');
        }
    }
}
