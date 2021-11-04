<?php

namespace App\Http\Controllers;

use App\Models\Straipsnis;
use App\Models\Rubrika;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'paveiksliukas' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'aprasymas' => 'nullable',
        ]);

        if ($failas = $request->file('paveiksliukas')) {
            // $katalogas = 'straipsniai/';
            // $paveiksliukas = date('YmdHis') . "." . $failas->getClientOriginalExtension();
            // $failas->move($katalogas, $paveiksliukas);
            // $data['paveiksliukas'] = "$katalogas$paveiksliukas";

            // failų įkelimo perdarymas, kai failai keliami į storage katalogą
            $data['paveiksliukas'] = Storage::url(
                $failas->storeAs(
                    'straipsniai',
                    date('YmdHis') . "." . $failas->extension(),
                    'public'
                )
            );
        }

        Straipsnis::create($data);

        return redirect()->route('straipsnis.index')->with('success', 'Pridėtas naujas stripsnis');
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
     * @param  \App\Models\Straipsnis  $straipsni
     * @return \Illuminate\Http\Response
     */
    public function edit(Straipsnis $straipsnis)
    {
        $rubrikos = Rubrika::all();
        return view("straipsniai.edit", compact("straipsnis", "rubrikos"));
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
        $data = $request->validate([
            'rid' => 'required',
            'pavadinimas' => 'required',
            'tekstas' => 'required',
            'nuoroda' => 'required|unique:straipsnis,nuoroda,'.$straipsnis->id,
            'paveiksliukas' => 'nullable',
            'aprasymas' => 'nullable',
        ]);

        if ($failas = $request->file('paveiksliukas')) {
            // $katalogas = 'straipsniai/';
            // $paveiksliukas = date('YmdHis') . "." . $failas->getClientOriginalExtension();
            // $failas->move($katalogas, $paveiksliukas);
            // $data['paveiksliukas'] = "$katalogas$paveiksliukas";

            // failų įkelimo perdarymas, kai failai keliami į storage katalogą
            $data['paveiksliukas'] = Storage::url(
                $failas->storeAs(
                    'straipsniai',
                    date('YmdHis') . "." . $failas->extension(),
                    'public'
                )
            );
        }

        // dd($data);

        $straipsnis->update($data);

        return redirect()->route('straipsnis.index')->with('success', 'Pakeista straipsnio informacija.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Straipsnis  $straipsnis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Straipsnis $straipsnis)
    {
        $straipsnis->delete();

        return redirect()->route('straipsnis.index')->with('success', 'Straipsnis ištrinta.');
    }


    /**
     * Išvedami rubrikos straipsniai. Adresui naudojama rubrikos nuoroda.
     *
     * @param  \App\Models\Rubrika  $rubrika
     * @param  \App\Models\Straipsnis  $straipsnis
     * @return \Illuminate\Http\Response
     */
    public function straipsnis(Rubrika $rubrika, $straipsnis)
    {
        $straipsnis = Straipsnis::where('nuoroda', $straipsnis)->first();
        return view("straipsnis", compact('rubrika', 'straipsnis'));
    }
}
