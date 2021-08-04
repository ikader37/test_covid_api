<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CovidPersonne;
use PDF;
use QrCode;

class QuittanceController extends Controller
{
    public function pdf(Request $request) {
        $personne = CovidPersonne::find(1);
        $data['personne']=$personne;
        $pdf = PDF::loadView('quittance.index',$data);
         
        return view('quittance.index',['personne',$personne]);
       // return QrCode::backgroundColor(0, 0, 0)->color(255, 255, 255)
               //  ->size(500)->generate(serialize($personne));
       // return $pdf->download('quittance.pdf');
    }
}
