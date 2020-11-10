<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('suma/{num1}/{num2}', [Calculator::class, 'sum']);
Route::get('resta/{num1}/{num2}', [Calculator::class, 'subs']);
Route::get('mult/{num1}/{num2}', [Calculator::class, 'mult']);
Route::get('divisio/{num1}/{num2}', [Calculator::class, 'divide']);
