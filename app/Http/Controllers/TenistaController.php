<?php

namespace App\Http\Controllers;

use App\Models\Tenista;
use Illuminate\Http\Request;

class TenistaController extends Controller
{
    public function index()
    {
        $tenistas= Tenista::with('torneo')->paginate(3);
        return view('tenistas.index')->with('tenistas',$tenistas);

    }
    public function show($id)
    {
        $tenista = Tenista::with('torneos')->findOrFail($id);
        return view('tenistas.show', compact('tenista'));
    }
}
