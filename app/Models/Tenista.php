<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenista extends Model
{
    protected $fillable =[
        'ranking',
        'nombre',
        'pais',
        'fechaNacimiento',
        'edad',
        'altura',
        'profesionalDesde',
        'mano',
        'reves',
        'modo',
        'entrenador',
        'dineroGanado',
        'bestRanking',
        'wins',
        'loses',
        'winrate',
        'imagen',
        'torneo_idSecundario',
        'isDeleted'



    ];
    public function torneo()
    {
        return $this->belongsTo(Torneo::class);

    }
    protected $hidden = [
        'isDeleted',
        'created_at',
        'update_at',
    ];


    use HasFactory;
    protected $table = 'tenistas';
}
