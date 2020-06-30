<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome(Request $request)
    {
        $namadepan = $request->input('firstname');
        $namabelakang = $request->input('lastname');

    	return view('welcome', compact('namadepan', 'namabelakang'));
    }

    public function register()
    {
    	return view('register');
    }
}

?>