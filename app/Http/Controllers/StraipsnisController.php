<?php

namespace App\Http\Controllers;

use App\Models\Straipsnis;
use App\Models\Rubrika;
use Illuminate\Http\Request;

class StraipsnisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubrikos = Rubrika::all();
        $straipsniai = Straipsnis::with("rubrika")->get();

        return view("straipsniai.index", compact("rubrikos", "straipsniai"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubrikos = Rubrika::all();
        return view("straipsniai.create", compact("rubrikos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'rid' => 'required',
            'pavadinimas' => 'required',
            'tekstas' => 'required',
            'nuoroda' => 'required|unique:straipsnis',
            'paveiksliukas' => 'nullable',
            'aprasymas' => 'nullable',
        ]);

        Straipsnis::create($data);

        return redirect()->route('straipsnis.index')->with('success', 'Pridėtas naujaa stripsnis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Straipsnis  $straipsnis
     * @return \Illuminate\Http\Response
     */
    public function show(Straipsnis $straipsnis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Straipsnis  $straipsnis
     * @return \Illuminate\Http\Response
     */
    public function edit(Straipsnis $straipsnis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Straipsnis  $straipsnis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Straipsnis $straipsnis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Straipsnis  $straipsnis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Straipsnis $straipsnis)
    {
        //
    }
}
