<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function __contruct(Request $request)
    {
    }

    public function index()
    {
        return view("install.step0");
    }
}
