<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtisteRequest extends FormRequest
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
        $id = $this->artiste ? ',' . $this->artiste->id : '';
    
        return [
            'nom' => 'required|string|max:30' . $id, //
            'prenom' => 'required|string|max:30' . $id,//
            'annee_naissance' => 'required|int|min:1900' . $id,
            'user_id' => 'required|int'
        ];
    }
}
