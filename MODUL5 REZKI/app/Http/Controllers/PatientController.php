<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Vaccine;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('patient', [
            'title' => 'Patient',
            'active' => 'patient',
            'patients' => Patient::all()
        ]);
    }

    /**
     * Show the for m for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('form_patient', [
            'title' => "Register Patient",
            'active' => 'patient'
        ]);
    }

    public function createByVaccine($id)
    {
        $vaccine = Vaccine::find($id);
        return view('form_patient', [
            'title' => "Register Patient",
            'active' => 'patient',
            'condition' => "Register",
            'vaccine' => $vaccine,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        $vaccine = $patient->vaccines;
        return view('form_patient', [
            'title' => "Update Patient",
            'active' => 'patient',
            'condition' => "Edit",
            'vaccine' => $vaccine,
            'patient' => $patient,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
