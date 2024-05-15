<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    public function tenista(){
        return $this->belongsTo(Tenista::class);
    }
    public function torneo()
    {
        return $this->belongsTo(Torneo::class);
    }

    protected $hidden =[
        'torneo_id',
        'created_at',
        'updated_at',
        ];
}