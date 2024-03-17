<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get("/", [HomeController::class, "index"])->name("homepage");

Route::get("/profile", function () {
    return Inertia::render("Profile");
})->middleware("auth")->name("progile");

Route::get("/settings", function () {
    return Inertia::render("Settings");
})->middleware("auth")->name("settings");

Route::get("/login", [LoginController::class, "show"])->name("login");
Route::post("/login", [LoginController::class, "store"]);

Route::get("/logout", [LoginController::class, "discard"])->middleware("auth")->name("logout");
