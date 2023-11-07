<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallController extends Controller
{
    //
    public function __contruct(Request $request)
    {
    }

    public function index()
    {
        return view("install.step0");
    }

    public function step0() {
        return view("install.step0");
    }

    public function step1() {
        return view("install.step1");
    }

    public function step2() {
        return view("install.step2");
    }

    public function step3() {
        return view("install.step3");
    }

    public function step4() {
        return view("install.step4");
    }

    public function success() {
        $data = array();
        $data["admin_email"] = "sacreddevking@gmail.com";

        return view("install.success", $data);
    }

    public function finializingSetup() {
        return view("install.finalizing_setup");
    }
}
