<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Torneo extends Model
{
    use HasUuids;

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

    public function tenista()
    {
        return $this->hasMany(Tenista::class);
    }

    public function participante()
    {
        return $this->hasMany(Participante::class);
    }

    protected $hidden = [
        'isDeleted',
        'id',
        'created_at',
        'updated_at',
    ];





}
