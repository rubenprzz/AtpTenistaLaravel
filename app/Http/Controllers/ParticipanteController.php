<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    public function destroy($id)
    {
        try {
            $participante = Participante::findOrFail($id);
            $torneoId = $participante->torneo_id;

            $participante->delete();

            if (!Participante::find($id)) {
                $participantes = Participante::where('torneo_id', $torneoId)->orderBy('puntos', 'desc')->get();
                $ranking = 1;

                foreach ($participantes as $existingParticipante) {
                    $existingParticipante->tenista->ranking = $ranking;
                    $existingParticipante->save();
                    $ranking++;
                }

                return redirect()->back()->with('success', 'Participante eliminado exitosamente.');
            } else {
                return redirect()->back()->with('error', 'No se pudo eliminar el participante.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error al eliminar el participante: ' . $e->getMessage());
        }
    }
}
