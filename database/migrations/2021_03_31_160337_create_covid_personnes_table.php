<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidPersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_personnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenom');
            $table->string('date_naissance')->nullable();
            $table->string('profession')->nullable();
            $table->string('telephone');
            $table->string('sexe')->nullable();
            $table->string('site');
            $table->string('programmer');
            $table->string('date_prelevement');
            $table->string('ville');
            $table->string('tuteur');
            $table->string('tel_tuteur');
            $table->string('residence');
            $table->string('ville_village');
            $table->string('quartier_secteur');
            $table->string('telephone_2');
            $table->string('numero_paiement');
            $table->string('prix');
            $table->string('transaction_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covid_personnes');
    }
}
