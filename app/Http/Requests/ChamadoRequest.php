<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChamadoRequest extends FormRequest
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
        
        //regra de validação dos campos do formulário de chamados
        return [
            'titulo'        => 'required',
            'descricao'     => 'required',
            'id_prioridade' => 'required'
        ];
        
    }
    
    public function messages()
    {
        
        //mensagens de validação dos campos do formulário de chamados
        return [
            'titulo.required'       => 'O campo TÍTULO é obrigatório.',
            'id_prioridade.required'=> 'O campo PRIORIDADE é obrigatório.',
            'descricao.required'    => 'O campo DESCRIÇÃO é obrigatório.'
        ];
        
    }
}
