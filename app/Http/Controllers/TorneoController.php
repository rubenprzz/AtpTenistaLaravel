<?php

namespace App\Http\Controllers;

use App\Models\Tenista;
use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function index()
    {
        $torneos=Torneo::with('participantes.tenista')->paginate(4);
        return view('torneos.index')->with('torneos',$torneos);

    }
    public function show($id)
    {
        $torneo = Torneo::find($id);
        if ($torneo) {
            return view('torneos.participantes')->with('torneo', $torneo);
        } else {
            return redirect()->route('torneos.index');
        }

    }
}
