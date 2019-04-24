<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'titre', 'annee', 'artiste_id', 'user_id'
    ];

    public function realisateur(){
        return $this->belongsTo('App\Models\Artiste', 'artiste_id');
    }

    public function displayRealisateur(){
        /*
        if($this->realisateur()->first()){
            return $this->realisateur()->first()->prenom.' '.$this->realisateur()->first()->nom;
        }
        else{
            return null;
        }
        */
        return optional($this->realisateur()->first())->prenom.' '.optional($this->realisateur()->first())->nom;
    }

    public function acteurs(){
        return $this->belongsToMany('App\Models\Artiste');
    }

    public function films_projetes()
    {
        return $this->hasMany('App\Models\Seance');
    }
}
