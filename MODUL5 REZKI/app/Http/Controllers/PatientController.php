<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Vaccine;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

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
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'vaccine_id' => 'required|max:255',
            'name' => 'required|max:255',
            'nik' => 'required|max:255',
            'alamat' => 'required|max:255',
            'image_ktp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'no_hp' => 'required|max:255',
        ]);

        $imageFile = $request->file('image_ktp');
        $imageName = time() . "_" . $imageFile->getClientOriginalName();
        $path = 'upload/patients';
        $imageFile->move($path, $imageName);

        Patient::create([
            'vaccine_id' => $request->vaccine_id,
            'name' => $request->name,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'image_ktp' => "/$path/$imageName",
            'no_hp' => $request->no_hp
        ]);

        return redirect('/patient')->with('success', 'New Vaccine is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
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
