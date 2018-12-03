<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipoUsuario;
use App\Http\Requests\TiposUsuariosRequest;

use \Illuminate\Contracts\Auth\Access\Gate;

class TiposUsuariosController extends Controller
{
    
    private $gate;
    private $tiposUsuarios;
    

    public function __construct(        
    Gate $gate,
    TipoUsuario $tiposUsuarios
    ) {
        
        $this->middleware('auth');
        $this->gate = $gate;
        $this->tiposUsuarios = $tiposUsuarios;
    }
    
    //Listando prioridade
    public function index() 
    {
        
        $tiposUsuarios = $this->tiposUsuarios->get();
        
        if($this->gate->allows('administrador')): 
            return view('tiposusuarios.index', compact('tiposUsuarios'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostrar formulário de cadastro de prioridade
    public function create()
    {
        
        if($this->gate->allows('administrador')): 
            return view('tiposusuarios.create');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Salva os dados de prioridade no banco
    public function store(TiposUsuariosRequest $request)
    {

        $tipo = $request->input('tipo');
        
        $this->tiposUsuarios->create([
            'tipo' => $tipo
        ]);
        
        if($this->gate->allows('administrador')): 
            return redirect()->route('tiposUsuarios.index')->withSuccess('Tipo inserido com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostra formulário de edição de prioridade
    public function edit($id)
    {
        
        $tiposUsuarios = $this->tiposUsuarios->find($id);
        
        if($this->gate->allows('administrador')): 
            return view('tiposusuarios.edit', ['tiposUsuarios' => $tiposUsuarios]);
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Atualiza prioridade no banco de dados
    public function update(TiposUsuariosRequest $request, $id)
    {
        
        $tipo = $request->input('tipo');
        
        $this->tiposUsuarios->find($id)->update([
            'tipo' => $tipo
        ]);
        
        if($this->gate->allows('administrador')):
            return redirect()->route('tiposUsuarios.index')->withSuccess('Tipo editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Exclui prioridade do banco de dados
    public function destroy($id){
        
        $this->tiposUsuarios->find($id)->delete();
        
        if($this->gate->allows('administrador')):
            return redirect()->route('tiposUsuarios.index')->withSuccess('Tipo excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
}
