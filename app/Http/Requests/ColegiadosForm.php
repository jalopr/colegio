<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColegiadosForm extends FormRequest
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
            //
            'nombres' => 'required|max:255',
            'apellido_paterno' => 'required|max:255',
            'apellido_materno' => 'required|max:255',
            'especialidad' => 'required|max:255',
            'dni' => 'required|max:8'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombres.required' => 'El campo nombres es requerido!',
            'apellido_paterno.required' => 'El campo apellido paterno es requerido!',
            'apellido_materno.required' => 'El campo apellido materno es requerido!',
            'especialidad.required' => 'El campo especialidad es requerido!',
        ];
    }
}
