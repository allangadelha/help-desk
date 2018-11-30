<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\ClientesRequest;

use App\TipoUsuario;

class UsuariosController extends Controller
{
    
    private $usuarios;
    

    public function __construct(        
    User $usuarios
    ) {
        
        $this->middleware('auth');
        $this->usuarios = $usuarios;
    }
    
    //Listando usuarios
    public function index() 
    {
        
        $usuarios = $this->usuarios->get();
        
        return view('usuarios.index', compact('usuarios'));
        
    }
        
    //Mostra formulário de edição de usuarios
    public function edit($id)
    {
        
        $usuarios = $this->usuarios->find($id);
        
        $tipo = TipoUsuario::pluck('tipo', 'id');
                                
        return view('usuarios.edit', ['usuarios' => $usuarios, 'tipo' => $tipo]);
        
    }
    
    
    //Atualiza usuarios no banco de dados
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
        
        return redirect()->route('usuarios.index')->withSuccess('Usuário editado com sucesso');
        
    }
        
    //Exclui usuarios do banco de dados
    public function destroy($id){
        
        $this->usuarios->find($id)->delete();
        return redirect()->route('usuarios.index')->withSuccess('Usuário excluído com sucesso');
        
    }
    
    
    //Exibe dados do usuarios
    public function show($id){
        
        $usuarios = $this->usuarios->find($id);
        return view('usuarios.show', compact('usuarios'));
        
    }
    
}
