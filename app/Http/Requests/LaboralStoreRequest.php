<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaboralStoreRequest extends FormRequest
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
            'name' =>'required|unique:laborals,name',
            'description' =>'required',

        ];
    }

    public function messages()
    {
    return [
    
        'name.required' =>'<b>El campo Nombre es obligatorio</b>',
        'name.unique' =>'<b>El Nombre ya se encuentra registrado</b>',

        ];
    }
}
