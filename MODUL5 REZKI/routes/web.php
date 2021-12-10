<?php

use App\Http\Controllers\PatientsController;
use App\Http\Controllers\VaccinesController;
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

Route::get('/vaccine', [VaccinesController::class, 'index']);
Route::get('/vaccines', [VaccinesController::class, 'list']);
Route::get('/vaccine/add', [VaccinesController::class, 'add']);
Route::get('/vaccine/update', [VaccinesController::class, 'update']);
Route::get('/patient', [PatientsController::class, 'index']);
Route::get('/patient/add', [PatientsController::class, 'add']);
Route::get('/patient/update', [PatientsController::class, 'update']);




