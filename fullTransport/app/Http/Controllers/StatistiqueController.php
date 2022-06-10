<?php

namespace App\Http\Controllers;

use App\Models\Ligne;
use App\Models\Statistique;
use App\Models\Ticket;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatistiqueController extends Controller
{
    public function getRecetteJour() {
        $lignes = Ligne::all();
        foreach ($lignes as $ligne)
            $nbreTicketsLigne = DB::table('lignes')
                                ->join('voyages', 'lignes.idLigne', '=', 'voyages.idLigne')
                                ->join('tickets', 'tickets.idVoyage', '=', 'voyages.idVoyage')
                                ->where('lignes.idLigne', '=', $ligne["idLigne"])
                                ->count();
            $prix = $ligne[0]["prix"];
            $recette =+ $nbreTicketsLigne * $prix;
        return $recette;
    }

    public function getNbreVehiculeDispos() {
        $vehicules = Vehicule::all()->where('statut', '=', 'disponible');
        return $vehicules;
    }

    public function getNbreVoyages() {
        $voyages = DB::table('voyages')
            ->where('dateVoyage', '=', date('Y-m-d'))
            ->count();
        return  $voyages;
    }

    public function getNbreTickets() {
        $nbreTicketsVendus = DB::table('lignes')
            ->join('voyages', 'lignes.idLigne', '=', 'voyages.idLigne')
            ->join('tickets', 'tickets.idVoyage', '=', 'voyages.idVoyage')
            ->where('dateVoyage', '=', date('Y-m-d'))
            ->count();
        return $nbreTicketsVendus;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statistique  $statistique
     * @return \Illuminate\Http\Response
     */
    public function show(Statistique $statistique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statistique  $statistique
     * @return \Illuminate\Http\Response
     */
    public function edit(Statistique $statistique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statistique  $statistique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statistique $statistique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statistique  $statistique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistique $statistique)
    {
        //
    }
}
