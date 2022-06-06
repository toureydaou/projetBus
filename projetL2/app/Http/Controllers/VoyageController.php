<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = Voyage::all()->where('dateVoyage', '>', 'now()');
        return view('voyages.index')->with('listeVoyages', $voyages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voyages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voyage = Voyage::create(['dateVoyage' => $request["dateVoyage"],
            'heure_depart' => $request["heure_depart"],
            'dateNaissance' => $request["dateNaissance"],
            'idBus' => $request["idBus"],
            'idLigne' => $request["idLigne"]]);
        $voyage->save();
        return redirect()->route('listeVoyages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function show(Voyage $voyage)
    {
        return view('voyages.show')->with('voyage', $voyage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function edit(Voyage $voyage)
    {
        return view('voyages.edit',)->with('voyage', $voyage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voyage $voyage)
    {
        $voyage->dateVoyage = $request["dateVoyage"];
        $voyage->heure_depart = $request["heure_depart"];
        $voyage->idBus = $request["idBus"];
        $voyage->idLigne = $request["idLigne"];
        $voyage->save();
        return redirect()->route('listeVoyages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voyage $voyage)
    {
        $voyage->delete();
        return redirect()->route('listeVoyages');
    }
}
