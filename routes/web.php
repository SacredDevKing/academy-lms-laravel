<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\InstallController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [WelcomeController::class, "index"]);

Route::prefix("install")->group(function() {
    Route::get("/step0", [InstallController::class, "step0"]);
    Route::get("/step1", [InstallController::class, "step1"]);
    Route::get("/step2", [InstallController::class, "step2"]);
    Route::get("/step3", [InstallController::class, "step3"]);
    Route::get("/step4", [InstallController::class, "step4"]);
    Route::get("/success", [InstallController::class, "success"]);
    Route::get("/finalizing_setup", [InstallController::class, "finializingSetup"]);
});

Route::prefix("frontend")->group(function() {
});