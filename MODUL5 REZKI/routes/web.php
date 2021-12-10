<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\VaccineController;
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
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/vaccine', [VaccineController::class, 'index']);
Route::get('/vaccines', [VaccineController::class, 'list']);
Route::get('/vaccine/add', [VaccineController::class, 'add']);
Route::get('/vaccine/update', [VaccineController::class, 'update']);
Route::get('/patient', [PatientController::class, 'index']);
Route::get('/patient/add', [PatientController::class, 'add']);
Route::get('/patient/update', [PatientController::class, 'update']);




