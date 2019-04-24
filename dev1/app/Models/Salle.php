<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $fillable = [
        'numero', 'capacite', 'climatisation', 'cinemas_id'
    ];

    public function cinemaSalle()
    {
        return $this->belongsTo('App\Models\Cinema', 'cinemas_id');
    }

    public function displayCinema(){

        return optional($this->cinemaSalle()->first())->nom_cinema;
    }

    public function displayClimatisation(){
        if($this->climatisation===1){
            return 'Oui';
        }
        else{
            return 'Non';
        }
    }

    public function seances_salle()
    {
        return $this->hasMany('App\Models\Seance');
    }
}
