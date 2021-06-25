<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class QuittanceController extends Controller
{
    public function pdf() {
        $pdf = PDF::loadView('quittance.index', []);
        return $pdf->download('quittance.pdf');
    }
}
