<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenista extends Model
{

    public static $IMAGE_DEFAULT= 'https://www.sport1.me/wp-content/uploads/2021/05/Wimbledon-2021-Dates.jpg';

    protected $fillable =[
        'ranking',
        'nombre',
        'pais',
        'puntos',
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
    public function participantes()
    {
        return $this->hasMany(Participante::class);
    }
    protected $hidden = [
        'isDeleted',
        'created_at',
        'update_at',
    ];


    use HasFactory;
    protected $table = 'tenistas';
}
