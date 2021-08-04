<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CovidPersonne;
use App\Models\User;


class CovidPersonneController extends Controller
{
    public function index() {
        return CovidPersonne::all();
    }

    public function enregistrer(Request $request) {
        return CovidPersonne::create($request->all());
    }
	
	public function enregistrerUser(Request $request){
		 return User::create($request->all());
	}

    public function enregistrerTelephonePaiement(Request $request) {
        $personne = CovidPersonne::find(1);//$request->id
        $personne->numero_paiement = $request->numero_paiement;
        $personne->save();
       $pdf = PDF::loadView('quittance.index', ['personne',$personne]);
        return $pdf->download('quittance.pdf');//->with('personne',$personne);
    }
}
