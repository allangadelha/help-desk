<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipoUsuario;
use App\Http\Requests\TiposUsuariosRequest;

class TiposUsuariosController extends Controller
{
    
    private $tiposUsuarios;
    

    public function __construct(        
    TipoUsuario $tiposUsuarios
    ) {
        
        $this->middleware('auth');
        $this->tiposUsuarios = $tiposUsuarios;
    }
    
    //Listando prioridade
    public function index() 
    {
        
        $tiposUsuarios = $this->tiposUsuarios->get();
        
        return view('tiposusuarios.index', compact('tiposUsuarios'));
        
    }
    
    //Mostrar formulário de cadastro de prioridade
    public function create()
    {
        
        return view('tiposusuarios.create');
        
    }
    
    //Salva os dados de prioridade no banco
    public function store(TiposUsuariosRequest $request)
    {

        $tipo = $request->input('tipo');
        
        $this->tiposUsuarios->create([
            'tipo' => $tipo
        ]);
        
        return redirect()->route('tiposUsuarios.index')->withSuccess('Tipo inserido com sucesso');
        
    }
    
    //Mostra formulário de edição de prioridade
    public function edit($id)
    {
        
        $tiposUsuarios = $this->tiposUsuarios->find($id);
                                
        return view('tiposusuarios.edit', ['tiposUsuarios' => $tiposUsuarios]);
        
    }
    
    
    //Atualiza prioridade no banco de dados
    public function update(TiposUsuariosRequest $request, $id)
    {
        
        $tipo = $request->input('tipo');
        
        $this->tiposUsuarios->find($id)->update([
            'tipo' => $tipo
        ]);
        
        return redirect()->route('tiposUsuarios.index')->withSuccess('Tipo editado com sucesso');
        
    }
    
    
    //Exclui prioridade do banco de dados
    public function destroy($id){
        
        $this->tiposUsuarios->find($id)->delete();
        return redirect()->route('tiposUsuarios.index')->withSuccess('Tipo excluído com sucesso');
        
    }
    
}
