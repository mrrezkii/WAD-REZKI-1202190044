<?php

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

Route::get('/vaccine', function () {
    return view('vaccine', [
        'title' => 'Vaccine',
        'active' => 'vaccine'
    ]);
});

Route::get('/vaccines', function () {
    return view('list_vaccine', [
        'title' => 'List Vaccine',
        'active' => 'patient'
    ]);
});

Route::get('/vaccine/add', function () {
    return view('form_vaccine', [
        'title' => 'Add Vaccine',
        'active' => 'vaccine'
    ]);
});

Route::get('/vaccine/update', function () {
    return view('form_vaccine', [
        'title' => 'Update Vaccine',
        'active' => 'vaccine'
    ]);
});

Route::get('/patient', function () {
    return view('patient', [
        'title' => 'Patient',
        'active' => 'patient'
    ]);
});

Route::get('/patient/add', function () {
    return view('form_patient', [
        'title' => 'Update Patient',
        'active' => 'patient'
    ]);
});

Route::get('/patient/update', function () {
    return view('form_patient', [
        'title' => 'Update Patient',
        'active' => 'patient'
    ]);
});




