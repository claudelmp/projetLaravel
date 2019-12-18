<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormationRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nomformation' => 'bail|required|min:1|max:300|string',
            'datedebut' => 'date',
            'duree' => 'bail|required|numeric|between:1,1000',
            'unite' => 'bail|required|min:1|max:10|alpha_dash',
            'categorie_id' => 'numeric'
        ];
    }

}
