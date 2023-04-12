<?php

use App\Http\Controllers\CarsController;
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
    $name = 'Petar';
    $age = '28';
    return view('welcome', compact('name', 'age'));
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/cars', [CarsController::class, 'index']);