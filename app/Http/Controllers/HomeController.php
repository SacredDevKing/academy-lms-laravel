<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $pageData = array();

    //
    public function __contruct(Request $request)
    {
    }

    public function index() 
    {
        $this->pageData["page_name"] = "home";
        $this->pageData["page_title"] = site_phrase("home");
        return view("frontend.apple.layouts.app")->with($this->pageData);
    }
}
