<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class SouscriptionChart extends Chart
{
    public $name = 'souscription_chart';
    public $prefix = 'souscription';
    public $middlewares = ['auth'];
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['First', 'Second', 'Third'])
            ->dataset('Sample', [1, 2, 3])
            ->dataset('Sample 2', [3, 2, 1]);
    }
}
