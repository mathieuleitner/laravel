<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $fillable = [
        'nom_cinema', 'arrondissement', 'adresse'
    ];

    public function salles()
    {
        return $this->hasMany('App\Models\Salle');
    }

    public function seances_cinema()
    {
        return $this->hasMany('App\Models\Seance');
    }
}
