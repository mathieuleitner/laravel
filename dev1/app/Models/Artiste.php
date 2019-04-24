<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'annee_naissance', 'user_id'
    ];

    public function films_realises(){
        return $this->hasMany('App\Models\Film');
    }

    public function films_joues(){
        return $this->belongsToMany('App\Models\Film')->withPivot('nom_role');
    }
}
