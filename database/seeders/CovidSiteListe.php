<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CovidSite;

class CovidSiteListe extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $sites = [
            ["nom" => "CMU POGBI"],
            ["nom" => "CHU TENGANDGO"],
            ["nom" => "CERBA (EX CANDAF)"],
            ["nom" => "AEROPORT HALL PELERINS"]
        ];

        foreach($sites as $site) CovidSite::create($site);
    }
}
