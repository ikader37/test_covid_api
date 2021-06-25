<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovidApiController;
use App\Http\Controllers\CovidPaiementController;
use App\Http\Controllers\CovidPersonneController;

Route::get('/sites', [CovidApiController::class, 'sites']);

Route::get('/personnes', [CovidPersonneController::class, 'index']);
Route::post('/personnes/enregistrer', [CovidPersonneController::class, 'enregistrer']);
Route::post('/personnes/enregistrer-telephone-paiement', [CovidPersonneController::class, 'enregistrerTelephonePaiement']);

Route::post('/paiements/enregistrer-paiement', [CovidPaiementController::class, 'enregistrerPaiement']);
Route::post('/paiements/re-enregistrer-paiement', [CovidPaiementController::class, 'reEnregistrerPaiement']);
Route::post('/paiements/valider-paiement', [CovidPaiementController::class, 'validerPaiement']);
Route::post('/paiements/valider-paiement-manuelle', [CovidPaiementController::class, 'validerPaiementManuelle']);
Route::get('/paiements/attente-paiement/{telephone}/{montant}', [CovidPaiementController::class, 'attentePaiement']);
