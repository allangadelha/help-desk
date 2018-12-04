<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TiposUsuariosRequest extends FormRequest
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
        
        //regra de validação dos campos do formulário de tipo de usuário
        return [
            'tipo' => 'required'
        ];
        
    }
    
    public function messages()
    {
     
        //mensagem de validação dos campos do formulário de tipo de usuário
        return [
            'tipo.required' => 'O campo TIPO é obrigatório.'
        ];
        
    }
}
