<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use App\Models\Tenista;
use App\Models\Torneo;
use Exception;
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
    public function create()
    {
        $tenistas = Tenista::all();
        return view('torneos.create', compact('tenistas'));
    }

    public function eliminarParticipante($torneoId, $participanteId)
    {
        try {
            $torneo = Torneo::findOrFail($torneoId);

            $participante = $torneo->participantes()->where('id', $participanteId)->first();

            if (!$participante) {
                return redirect()->back()->with('error', 'El participante no está asociado a este torneo');
            }

            $torneo->participantes()->detach($participanteId);

            return redirect()->back()->with('success', 'Participante eliminado del torneo exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error al eliminar el participante del torneo');
        }
    }
    public function showAddParticipanteForm($torneoId)
    {
        $torneo = Torneo::findOrFail($torneoId);
        $tenistas = Tenista::all();

        return view('torneos.add-participante', compact('torneo', 'tenistas'));
    }

    public function addParticipante(Request $request, $torneoId)
    {
        $request->validate([
            'tenista_id' => 'required|exists:tenistas,id',
        ]);

        $torneo = Torneo::findOrFail($torneoId);

        if ($torneo->participantes()->where('tenista_id', $request->tenista_id)->exists()) {
            return redirect()->back()->with('error', 'El tenista ya está registrado en el torneo.');
        }

        $participante = new Participante();
        $participante->tenista_id = $request->tenista_id;
        $participante->torneo_id = $torneo->id;
        $participante->tenista_puntos = 0;
        $participante->tenista_nombre= 'a';
        $participante->tenista_ranking = $torneo->participantes()->count() + 1;
        $participante->save();

        return redirect()->route('torneos.show', $torneoId)->with('success', 'Participante añadido exitosamente.');
    }



    public function store(Request $request)
    {


        $torneo = new Torneo($request->all());

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('imagenes', 'public');
            $torneo->imagen = $path;
        } else {
            $torneo->imagen = Torneo::$IMAGE_DEFAULT;
        }

        $torneo->save();



        return redirect()->route('torneos.index')->with('success', 'Torneo creado exitosamente.');
    }




    public function edit($id)
    {
        $torneo = Torneo::with('participantes.tenista')->find($id);
        $tenistas = Tenista::all();
        return view('torneos.edit', compact('torneo', 'tenistas'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos


        $torneo = Torneo::findOrFail($id);

        $torneo->nombre = $request->nombre;
        $torneo->ubicacion = $request->ubicacion;
        $torneo->modo = $request->modo;
        $torneo->categoria = $request->categoria;
        $torneo->superficie = $request->superficie;
        $torneo->premio = $request->premio;
        $torneo->puntos = $request->puntos;
        $torneo->fechaInicio = $request->fechaInicio;
        $torneo->fechaFinalizacion = $request->fechaFinalizacion;

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $ruta = $imagen->storeAs('imagenes', $nombreImagen, 'public');
            $torneo->imagen = 'storage/' . $ruta;
        }

        $torneo->save();

        return redirect()->route('torneos.index')->with('success', 'Torneo actualizado correctamente');
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
