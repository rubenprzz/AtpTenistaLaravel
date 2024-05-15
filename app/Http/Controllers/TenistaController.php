<?php

namespace App\Http\Controllers;

use App\Models\Tenista;
use Illuminate\Http\Request;

class TenistaController extends Controller
{
    public function index()
    {
        $tenistas= Tenista::with('torneo')->get();
        return response($tenistas);

    }
}
