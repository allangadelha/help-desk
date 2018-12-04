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
        
        //Autenticação
        $this->middleware('auth');
        $this->gate = $gate;
        $this->tiposUsuarios = $tiposUsuarios;
    }
    
    //Listando tipo de usuário
    public function index() 
    {
        
        //lista tipos de usuários
        $tiposUsuarios = $this->tiposUsuarios->get();
        
        //validação ACL
        if($this->gate->allows('administrador')): 
            return view('tiposusuarios.index', compact('tiposUsuarios'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostrar formulário de cadastro de tipo de usuário
    public function create()
    {
        //mostra formulário de criação de tipo de usuário
        //validação ACL
        if($this->gate->allows('administrador')): 
            return view('tiposusuarios.create');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Salva os dados de tipo de usuário no banco
    public function store(TiposUsuariosRequest $request)
    {

        //dados do formulário de criação de tip de usuário
        $tipo = $request->input('tipo');
        
        $this->tiposUsuarios->create([
            'tipo' => $tipo
        ]);
        
        //validação ACL
        if($this->gate->allows('administrador')): 
            return redirect()->route('tiposUsuarios.index')->withSuccess('Tipo inserido com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostra formulário de edição de tipo de usuário
    public function edit($id)
    {
        
        //busca tipo de usuário a ser editado
        $tiposUsuarios = $this->tiposUsuarios->find($id);
        
        //validação ACL
        if($this->gate->allows('administrador')): 
            return view('tiposusuarios.edit', ['tiposUsuarios' => $tiposUsuarios]);
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Atualiza tipo de usuário no banco de dados
    public function update(TiposUsuariosRequest $request, $id)
    {
        
        //dados do formulário de edição de tipo de usuário
        $tipo = $request->input('tipo');
        
        $this->tiposUsuarios->find($id)->update([
            'tipo' => $tipo
        ]);
        
        //validação ACL
        if($this->gate->allows('administrador')):
            return redirect()->route('tiposUsuarios.index')->withSuccess('Tipo editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Exclui tipo de usuário do banco de dados
    public function destroy($id){
        
        //busca tipo de usuário a ser excluído
        $this->tiposUsuarios->find($id)->delete();
        
        //validação ACL
        if($this->gate->allows('administrador')):
            return redirect()->route('tiposUsuarios.index')->withSuccess('Tipo excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
}
