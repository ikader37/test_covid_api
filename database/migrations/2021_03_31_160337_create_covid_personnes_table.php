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
