<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CovidPaiement;

class CovidPaiementController extends Controller
{
    public function index() {
        return view('paiements.index', [
            'paiements' => CovidPaiement::all()
        ]);
    }

    public function enregistrerPaiement(Request $request) {
        /*$paiement = new SunuPaiement();
        $paiement->trans_id = "0000000000000";
        $paiement->save();*/
        $paiement = CovidPaiement::create([
            "telephone" => $request->telephone, 
            "montant" => $request->montant, 
            "mode_paiement_id" => $request->mode_paiement_id, 
            "trans_id" => $request->id_trans 
        ]);

        $pusher = new \Pusher\Pusher(env('PUSHER_APP_KEY', null), env('PUSHER_APP_SECRET', null), env('PUSHER_APP_ID', null), array('cluster' => env('PUSHER_APP_CLUSTER', null)));
        $pusher->trigger('paiement', $request->telephone, ['id' => $paiement->id, 'message' => 'Paiement effectué avec succès']);

        return response()->json(["result" => 1]);
    }
    
    public function validerPaiement(Request $request) {
        $paiement = CovidPaiement::find($request->id);
        $response = ["result" => 0];
        
        return response()->json($response);
    }

    public function validerPaiementManuelle(Request $request) {
        $paiement = CovidPaiement::find($request->id);
        $response = ["result" => 0];
        
        return response()->json($response);
    }
    
    public function reEnregistrerPaiement(Request $request) {
        /*$paiement = Paiement::where("id_trans", $request->id_trans)->get();
        $response = ["result" => 0];
        if(sizeof($paiement) == 0) {
            $paiement = Paiement::create($request->all());
            $response = ["result" => 1];
        }
        
        return response()->json($response);*/
    }
    
    public function attentePaiement($telephone, $montant) {
        $response = ["id" => 0];
        $paiement = CovidPaiement::where("telephone", $telephone)->where("montant", $montant)->where("etat_paiement_id", 0)->first();
        $count = 0;
        
        if($paiement != null) {
            $response = ["id" => $paiement->id];
        }
        
        return response()->json($response);
    }
}
