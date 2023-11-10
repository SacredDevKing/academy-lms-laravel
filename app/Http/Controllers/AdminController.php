<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    private $pageData;

    public function __contruct(Request $request)
    {
        // Page Initial Data
        $this->pageData = array();
    }

    public function index()
    {
        
    }

    public function dashboard()
    {
        return view("backend.layouts.app")->with($this->pageData);
    }
}
