<?php

namespace App\Http\Controllers;

use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient', [
            'title' => 'Patient',
            'active' => 'patient',
            'patients' => Patient::all()
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
