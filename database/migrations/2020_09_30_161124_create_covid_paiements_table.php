<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidPaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_paiements', function (Blueprint $table) {
            $table->id();
            $table->integer('uuid')->nullable();
            $table->integer('telephone');
            $table->integer('montant');
            $table->integer('mode_paiement_id');
            $table->integer('etat_paiement_id')->default(1);
            $table->string('trans_id');
            $table->string('sms_texte')->nullable();
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
        Schema::dropIfExists('covid_paiements');
    }
}
