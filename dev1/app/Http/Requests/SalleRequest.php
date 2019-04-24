<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalleRequest extends FormRequest
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
        $id = $this->salle ? ',' . $this->salle->id : '';
    
        return [
            'numero' => 'required|int' . $id, //
            'climatisaion' => 'smallint', //
            'capacite' => 'required|int',
            'cinemas_id'=> 'required|int'//
        ];
    }
}
