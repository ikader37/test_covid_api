<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CovidSite;

class CovidApiController extends Controller
{
    public function sites() {
        return CovidSite::all();
    }
}
