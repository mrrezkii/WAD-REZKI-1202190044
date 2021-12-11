<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Vaccine;
use Exception;
use File;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('pages.patient.index', [
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
        return view('pages.patient.form_patient', [
            'title' => "Register Patient",
            'active' => 'patient'
        ]);
    }

    public function createByVaccine($id)
    {
        $vaccine = Vaccine::find($id);
        return view('pages.patient.form_patient', [
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
        try {
            $this->validate($request, [
                'vaccine_id' => 'required|max:255',
                'name' => 'required|max:255',
                'nik' => 'required|max:255',
                'alamat' => 'required|max:255',
                'image_ktp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'no_hp' => 'required|max:255',
            ]);
        } catch (ValidationException $e) {
            @dd($e);
        }

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

        return redirect('/patient')->with('success', "$request->name is successfully saved");
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
        return view('pages.patient.form_patient', [
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
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'vaccine_id' => 'required|max:255',
                'name' => 'required|max:255',
                'nik' => 'required|max:255',
                'alamat' => 'required|max:255',
                'image_ktp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'no_hp' => 'required|max:255',
            ]);
        } catch (ValidationException $e) {
            @dd($e);
        }

        $imageFile = $request->file('image_ktp');
        if (!is_null($imageFile)) {
            $imageName = time() . "_" . $imageFile->getClientOriginalName();
            $path = 'upload/patients';
            $imageFile->move($path, $imageName);

            $data = Patient::findOrFail($id);
            if (File::exists(public_path($data->image_ktp))) {
                File::delete(public_path($data->image_ktp));
            }
            $data->update([
                'vaccine_id' => $request->vaccine_id,
                'name' => $request->name,
                'nik' => $request->nik,
                'alamat' => $request->alamat,
                'image_ktp' => "/$path/$imageName",
                'no_hp' => $request->no_hp
            ]);
        } else {
            Patient::whereId($id)->update([
                'vaccine_id' => $request->vaccine_id,
                'name' => $request->name,
                'nik' => $request->nik,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp
            ]);
        }

        return redirect('/patient')->with('success', "$request->name has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $data = Patient::findOrFail($id);
            if (File::exists(public_path($data->image_ktp))) {
                File::delete(public_path($data->image_ktp));
            }
            $data->delete();
            return redirect('/patient')->with('success', 'Patient has been deleted');
        } catch (Exception $e) {
            return redirect('/patient')->with('failed', "Patient can't be deleted because it's still in use");
        }
    }
}
