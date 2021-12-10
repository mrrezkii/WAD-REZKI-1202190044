<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('vaccine', [
            'title' => 'Vaccine',
            'active' => 'vaccine',
            'vaccines' => Vaccine::all()
        ]);
    }

    public function list()
    {
        return view('list_vaccine', [
            'title' => 'List Vaccine',
            'active' => 'patient',
            'vaccines' => Vaccine::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('form_vaccine', [
            'title' => 'Add Vaccine',
            'active' => 'vaccine',
            'condition' => "Input",
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
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $vaccine = Vaccine::find($id);
        return view('form_vaccine', [
            'title' => 'Add Vaccine',
            'active' => 'vaccine',
            'condition' => "Edit",
            'vaccine' => $vaccine
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
