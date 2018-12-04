<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\ClientesRequest;

use App\TipoUsuario;

use \Illuminate\Contracts\Auth\Access\Gate;

class AtendentesController extends Controller
{
    
    private $gate;
    private $atendentes;
    

    public function __construct(
    Gate $gate,
    User $atendentes
    ) {
        
        $this->middleware('auth');
        $this->gate = $gate;
        $this->atendentes = $atendentes;
    }
    
    //Listando atendentes
    public function index() 
    {
        //lista usuários atendentes
        $atendentes = $this->atendentes->where('id_tipo_users', '<>', 3)->get();
        
        //validação ACL 
        if($this->gate->allows('administrador')): 
            return view('atendentes.index', compact('atendentes'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
        
    //Mostra formulário de edição de atendentes
    public function edit($id)
    {
        
        //busca usuário para edição
        $atendentes = $this->atendentes->find($id);
        
        //lista tipos de usuários
        $tipo = TipoUsuario::pluck('tipo', 'id');
        
        //validação ACL 
        if($this->gate->allows('administrador')):
            return view('atendentes.edit', ['atendentes' => $atendentes, 'tipo' => $tipo]);
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Atualiza atendentes no banco de dados
    public function update(ClientesRequest $request, $id)
    {
        
        //campos vindo do formulário de edição
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
        
        //validação ACL 
        if($this->gate->allows('administrador')):
            return redirect()->route('atendentes.index')->withSuccess('Atendente editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
        
    //Exclui atendentes do banco de dados
    public function destroy($id){
        
        //busca atendente para exclusão
        $this->atendentes->find($id)->delete();
        
        //validação ACL 
        if($this->gate->allows('administrador')):
            return redirect()->route('atendentes.index')->withSuccess('Atendente excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Exibe dados do atendentes
    public function show($id){
        
        //busca atendente a ser mostrado
        $atendentes = $this->atendentes->find($id);
        
        //validação ACL 
        if($this->gate->allows('administrador')): 
            return view('atendentes.show', compact('atendentes'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
}
