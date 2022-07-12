<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreInvitado extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(Request $request)
    {
        return [
        // Validate
            'nombre'   => 'required|min:3|max:20',
            'apellido' => 'required|min:3',
            'telefono' => 'required|numeric|min:15',
            'correo'   => 'required|email|unique:invitados,correo',
            'edad'     => 'required|numeric|max:99',
            'check'    => 'required|'
        ];
    }
}
