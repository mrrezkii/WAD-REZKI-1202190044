<?php

namespace App\Http\Controllers;

class VaccinesController extends Controller
{
    public function index()
    {
        return view('vaccine', [
            'title' => 'Vaccine',
            'active' => 'vaccine'
        ]);
    }

    public function list()
    {
        return view('list_vaccine', [
            'title' => 'List Vaccine',
            'active' => 'patient'
        ]);
    }

    public function add()
    {
        return view('form_vaccine', [
            'title' => 'Add Vaccine',
            'active' => 'vaccine'
        ]);
    }

    public function update()
    {
        return view('form_vaccine', [
            'title' => 'Update Vaccine',
            'active' => 'vaccine'
        ]);
    }

    public function delete()
    {
        //TODO
    }

}
