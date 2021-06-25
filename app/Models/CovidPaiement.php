<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidPaiement extends Model
{
    use HasFactory;
    protected $fillable = ['telephone', 'montant', 'sunu_mode_paiement_id', 'trans_id', 'sms_texte'];
}