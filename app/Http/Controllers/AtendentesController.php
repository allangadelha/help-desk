<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\ClientesRequest;

use App\TipoUsuario;

class AtendentesController extends Controller
{
    
    private $atendentes;
    

    public function __construct(        
    User $atendentes
    ) {
        
        $this->middleware('auth');
        $this->atendentes = $atendentes;
    }
    
    //Listando atendentes
    public function index() 
    {
        
        $atendentes = $this->atendentes->where('id_tipo_users', '<>', 3)->get();
        
        return view('atendentes.index', compact('atendentes'));
        
    }
        
    //Mostra formulário de edição de atendentes
    public function edit($id)
    {
        
        $atendentes = $this->atendentes->find($id);
        
        $tipo = TipoUsuario::pluck('tipo', 'id');
                                
        return view('atendentes.edit', ['atendentes' => $atendentes, 'tipo' => $tipo]);
        
    }
    
    
    //Atualiza atendentes no banco de dados
    public function update(ClientesRequest $request, $id)
    {
        
        $name          = $request->input('name');
        $email         = $request->input('email');
        $ativo         = $request->input('ativo');
        $id_tipo_users = $request->input('id_tipo_users');
        
        $this->atendentes->find($id)->update([
            'name'          => $name,
            'email'         => $email,
            'ativo'         => $ativo,
            'id_tipo_users' => $id_tipo_users
        ]);
        
        return redirect()->route('atendentes.index')->withSuccess('Atendente editado com sucesso');
        
    }
        
    //Exclui atendentes do banco de dados
    public function destroy($id){
        
        $this->atendentes->find($id)->delete();
        return redirect()->route('atendentes.index')->withSuccess('Atendente excluído com sucesso');
        
    }
    
    
    //Exibe dados do atendentes
    public function show($id){
        
        $atendentes = $this->atendentes->find($id);
        return view('atendentes.show', compact('atendentes'));
        
    }
    
}
