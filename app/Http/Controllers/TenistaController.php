<?php

namespace App\Http\Controllers;

use AllowDynamicProperties;
use App\Models\Tenista;
use App\Models\Torneo;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

#[AllowDynamicProperties] class TenistaController extends Controller
{
    public function index()
    {
        $tenistas = Tenista::with('torneos')->paginate(3);
        return view('tenistas.index')->with('tenistas', $tenistas);

    }

    public function show($id)
    {
        $tenista = Tenista::with('torneos')->findOrFail($id);
        return view('tenistas.show', compact('tenista'));
    }

    public function generatePDF($id)
    {
        $tenista = Tenista::find($id);
        if (!$tenista) {
            return redirect()->back()->with('error', 'Tenista no encontrado.');
        }
        $pdf = PDF::loadView('tenistas.generate-pdf', ['tenista' => $tenista]);
        return $pdf->stream('tenista.generate-pdf');
    }

    public function create()
    {

        return view('tenistas.create');

    }
    public function edit($id)
    {
        $tenista = Tenista::findOrFail($id);

        return view('tenistas.edit', compact('tenista'));
    }

    public function update(Request $request, $id)
    {


        $tenista = Tenista::findOrFail($id);

        $tenista->update($request->all());

        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('images', 'public');
            $tenista->imagen = $imagePath;
            $tenista->save();
        }

        return redirect()->route('tenistas.index')->with('success', 'Tenista updated successfully');
    }

    public function store(Request $request)
    {
        $tenista = new Tenista($request->all());
        $tenistas = Tenista::orderBy('puntos', 'desc')->get();

        $ranking = 1;
        foreach ($tenistas as $existingTenista) {
            if ($existingTenista->puntos > $tenista->puntos) {
                $ranking++;
            } else {
                break;
            }
        }
        $tenista->ranking = $ranking;

        $tenista->edad = Carbon::parse($tenista->fechaNacimiento)->age;
        if ($tenista->loses > 0) {
            $tenista->winrate = round(($tenista->wins / ($tenista->wins + $tenista->loses)) * 100, 2);
        } else {
            $tenista->winrate = 100;
        }

        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->storeAs('tenistas', $request->file('imagen')->getClientOriginalName(), 'public');
            $tenista->imagen = $imagenPath;
        } else {
            $tenista->imagen = Tenista::$IMAGE_DEFAULT;
        }

        $tenista->save();

        return redirect()->route('tenistas.index')->with('success', 'Tenista creado exitosamente.');
    }
    public function destroy($id)
    {
        $tenista = Tenista::find($id);
        if ($tenista) {

            $tenista->delete();
            return redirect()->route('tenistas.index');
        } else {
            return redirect()->route('tenistas.index');
        }
    }

}
