<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'jour' => 'required', //
            'heure_debut' => 'required|time', //
            'duree' => 'required|string',
            'film_id' => 'required|integer',
            'cinema_id' => 'required|integer',
            'salles_id' => 'required|integer'
        ];
    }
}
