<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContatoRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Nome' => 'required|min:3',
            'Telefone' => 'required|min:8',
            'Email' => 'required|email',
            'Mensagem' => 'required|min:5',

        ];
    }

}