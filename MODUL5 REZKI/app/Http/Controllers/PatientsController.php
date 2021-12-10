<?php

namespace App\Http\Controllers;

use App\Models\Patients;

class PatientsController extends Controller
{
    public function index()
    {
        return view('patient', [
            'title' => 'Patient',
            'active' => 'patient',
            'patients' => Patients::all()
        ]);
    }

    public function add()
    {
        return view('form_patient', [
            'title' => 'Update Patient',
            'active' => 'patient'
        ]);
    }

    public function update()
    {
        return view('form_patient', [
            'title' => 'Update Patient',
            'active' => 'patient'
        ]);
    }

    public function delete()
    {
        //TODO
    }
}
