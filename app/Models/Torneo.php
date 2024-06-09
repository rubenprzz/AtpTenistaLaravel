<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Torneo extends Model
{
    use SoftDeletes;
    use HasUuids;


    public static $IMAGE_DEFAULT= 'https://www.sport1.me/wp-content/uploads/2021/05/Wimbledon-2021-Dates.jpg';

    protected $fillable = [
        'id',
        'idSecundario',
        'nombre',
        'ubicacion',
        'categoria',
        'modo',
        'superficie',
        'entradas',
        'premio',
        'puntos',
        'imagen',
        'fechaInicio',
        'fechaFinalizacion',
        'isDeleted'

    ];



    public function participantes   ()
    {
        return $this->hasMany(Participante::class);
    }

    protected $hidden = [
        'isDeleted',
        'id',
        'created_at',
        'updated_at',
    ];
    public static function getCategorias()
    {
        return Categoria::cases();
    }
    use HasFactory;






}
