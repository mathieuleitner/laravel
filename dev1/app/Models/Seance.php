<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = [
        'jour', 'heure_debut', 'duree', 'cinema_id', 'film_id', 'salles_id'
    ];
    
    ////////////////////
    // FILMS

    public function films_affiche()
    {
        return $this->belongsTo('App\Models\Film', 'film_id');
    }
    public function display_film()
    {
        return optional($this->films_affiche()->first())->titre;
    }

    ////////////////////
    // SALLES

    public function salle_seance()
    {
        return $this->belongsTo('App\Models\Salle', 'salles_id');
    }

    public function display_salle(){
        
        return optional($this->salle_seance()->first())->numero;
    }

    ////////////////////
    //CINEMAS
    
    public function cinema_seance()
    {
        return $this->belongsTo('App\Models\Cinema', 'cinema_id');
    }
    
    public function display_cinema(){
        
        return optional($this->cinema_seance()->first())->nom_cinema;
    }

    ////////////////////
    // JOUR

    public function display_jour()
    {   
        $jour=$this->jour;
        return $jour;
    }

}
