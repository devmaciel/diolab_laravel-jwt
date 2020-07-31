<?php

namespace App\Http\Requests\Endereco;

use Illuminate\Foundation\Http\FormRequest;

class SalvarRequest extends FormRequest
{
    //=====================================================
    //sem sistema login, então TRUE
    public function authorize()
    {
        return true;
    }

    //=====================================================
    public function rules()
    {
        return [
            'cep' => 'required|string',
            'logradouro' => 'required|string',
            'numero' => 'required|string',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'estado' => 'required|string',
        ];
    }
}
