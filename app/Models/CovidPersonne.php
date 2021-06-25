<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidPersonne extends Model
{
    use HasFactory;
    protected $fillable = ['nom_prenom', 'date_naissance', 'profession', 'telephone', 'sexe'];
}
