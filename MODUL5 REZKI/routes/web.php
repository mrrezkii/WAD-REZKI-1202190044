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
Route::get('/vaccines', [VaccineController::class, 'list']);
Route::put('/vaccine/{vaccine}', [VaccineController::class, 'update']);
Route::delete('/vaccine/{vaccine}', [VaccineController::class, 'destroy']);
Route::resource('/vaccine', VaccineController::class);

Route::get('/patient/create/{id}', [PatientController::class, 'createByVaccine']);
Route::put('patient/{patient}', [PatientController::class, 'update']);
Route::delete('patient/{patient}', [PatientController::class, 'destroy']);
Route::resource('/patient', PatientController::class);




