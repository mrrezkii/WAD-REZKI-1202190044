<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

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
     * @return Application|Redirector|RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|max:255',
                'price' => 'required|max:255',
                'description' => 'required|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
        } catch (ValidationException $e) {
            @dd($e);
        }

        $imageFile = $request->file('image');
        $imageName = time() . "_" . $imageFile->getClientOriginalName();
        $path = 'upload/vaccines';
        $imageFile->move($path, $imageName);

        Vaccine::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => "/$path/$imageName",
        ]);

        return redirect('/vaccine')->with('success', 'New Vaccine is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
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
        $vaccine = Vaccine::find($id);
        return view('form_vaccine', [
            'title' => 'Add Vaccine',
            'active' => 'vaccine',
            'condition' => "Edit",
            'vaccine' => $vaccine
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
                'name' => 'required|max:255',
                'price' => 'required|max:255',
                'description' => 'required|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
        } catch (ValidationException $e) {
            @dd($e);
        }
        $imageFile = $request->file('image');
        if (!is_null($imageFile)) {
            $imageName = time() . "_" . $imageFile->getClientOriginalName();
            $path = 'upload/vaccines';
            $imageFile->move($path, $imageName);

            Vaccine::whereId($id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'image' => "/$path/$imageName",
            ]);
        } else {
            Vaccine::whereId($id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description
            ]);
        }

        return redirect('/vaccine')->with('success', 'Vaccine has been updated');
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
