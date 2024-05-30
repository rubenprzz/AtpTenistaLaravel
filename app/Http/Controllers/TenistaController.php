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
        $tenista = Tenista::find($id);
        if ($tenista) {
            return view('tenistas.show')->with('tenista', $tenista);
        } else {
            return redirect()->route('tenistas.index');
        }

    }
}
