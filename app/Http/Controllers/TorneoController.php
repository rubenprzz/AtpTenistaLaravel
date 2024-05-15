<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function index()
    {
        $torneos=Torneo::with('participante')->get();
        return response($torneos);

    }
}