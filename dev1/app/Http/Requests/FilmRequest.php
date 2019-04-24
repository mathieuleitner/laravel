<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
        $id = $this->film ? ',' . $this->film->id : '';
    
        return [
            'titre' => 'required|string|max:20|unique:films,titre' . $id, //
            'annee' => 'required|integer', //
            'artiste_id' => 'required|string',
            'user_id' => 'required|int'
        ];
    }
}
