<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CinemaRequest extends FormRequest
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
        $id = $this->cinema ? ',' . $this->cinema->id : '';
    
        return [
            'nom_cinema' => 'required|string|max:10|unique:artistes,nom' . $id, //
            'arrondissement' => 'required|integer',//
            'adresse' => 'required|string',
        ];
    }
}