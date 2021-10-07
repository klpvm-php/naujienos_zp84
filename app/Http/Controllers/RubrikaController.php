<?php

namespace App\Http\Controllers;

use App\Models\Rubrika;
use Illuminate\Http\Request;

class RubrikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubrikos = Rubrika::all();
        // dd($rubrikos);

        return view("rubrikos.index", compact("rubrikos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubrikos = Rubrika::all();
        return view("rubrikos.create", compact("rubrikos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $data = $request->validate([
            'pavadinimas' => 'required',
            'aprasymas' => 'nullable',
            'nuoroda' => 'required|unique:rubrikas',
        ]);

        Rubrika::create($data);

        return redirect()->route('rubrika.index')->with('success', 'Pridėta nauja rubrika');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rubrika  $rubrika
     * @return \Illuminate\Http\Response
     */
    public function show(Rubrika $rubrika)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rubrika  $rubrika
     * @return \Illuminate\Http\Response
     */
    public function edit(Rubrika $rubrika)
    {
        return view("rubrikos.edit", compact("rubrika"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rubrika  $rubrika
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rubrika $rubrika)
    {
        $data = $request->validate([
            'pavadinimas' => 'required',
            'aprasymas' => 'nullable',
            'nuoroda' => 'required|unique:rubrikas,nuoroda,'.$rubrika->id,
        ]);

        $rubrika->update($data);

        return redirect()->route('rubrika.index')->with('success', 'Pakeista rubrikos informacija.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rubrika  $rubrika
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rubrika $rubrika)
    {
        $rubrika->delete();

        return redirect()->route('rubrika.index')->with('success', 'Rubrika ištrinta.');
    }

    /**
     * Išvedami rubrikos straipsniai. Adresui naudojama rubrikos nuoroda.
     *
     * @param  \App\Models\Rubrika  $rubrika
     * @return \Illuminate\Http\Response
     */
    public function straipsniai(Rubrika $rubrika)
    {
        // dd($rubrika);
        return view("rubrika", compact('rubrika'));
    }
}
