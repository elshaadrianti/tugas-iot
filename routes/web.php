<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});
Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});
Route::get('/devices', function () {
    return view('devices', [
        "title" => "devices",
        "name" => "Sensor Suhu",
        "min_value" => 0,
        "max_value" => 100,
        "current_value" => 25
    ]);
});
Route::get('/rules', function () {
    return view('rules', [
        "title" => "rules"
    ]);
});
Route::get('/users', function () {
    return view('users', [
        "title" => "users"
    ]);
});