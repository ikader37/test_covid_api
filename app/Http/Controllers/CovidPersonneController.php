<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CovidPersonne;

class CovidPersonneController extends Controller
{
    public function index() {
        return CovidPersonne::all();
    }

    public function enregistrer(Request $request) {
        return CovidPersonne::create($request->all());
    }

    public function enregistrerTelephonePaiement(Request $request) {
        $personne = CovidPersonne::find($request->id);
        $personne->numero_paiement = $request->numero_paiement;
        $personne->save();
    }
}
