<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\ClientesRequest;

use App\TipoUsuario;

use \Illuminate\Contracts\Auth\Access\Gate;

class UsuariosController extends Controller
{
    
    private $gate;
    private $usuarios;
    

    public function __construct(
    Gate $gate,
    User $usuarios
    ) {
        
        $this->middleware('auth');
        $this->gate = $gate;
        $this->usuarios = $usuarios;
        
        
    }
    
    //Listando usuarios
    public function index() 
    {
        
        $usuarios = $this->usuarios->get();
        
        if($this->gate->allows('administrador')):       
            return view('usuarios.index', compact('usuarios'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
        
    //Mostra formulário de edição de usuarios
    public function edit($id)
    {
               
        $usuarios = $this->usuarios->find($id);
        
        $tipo = TipoUsuario::pluck('tipo', 'id');
           
        if($this->gate->allows('administrador')):
            return view('usuarios.edit', ['usuarios' => $usuarios, 'tipo' => $tipo]);
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Atualiza usuarios no banco de dados
    public function update(ClientesRequest $request, $id)
    {
        
        $name          = $request->input('name');
        $email         = $request->input('email');
        $ativo         = $request->input('ativo');
        $id_tipo_users = $request->input('id_tipo_users');
        
        $this->usuarios->find($id)->update([
            'name'          => $name,
            'email'         => $email,
            'ativo'         => $ativo,
            'id_tipo_users' => $id_tipo_users
        ]);
        
        if($this->gate->allows('administrador')):
            return redirect()->route('usuarios.index')->withSuccess('Usuário editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
        
    //Exclui usuarios do banco de dados
    public function destroy($id){
        
        $this->usuarios->find($id)->delete();
        
        if($this->gate->allows('administrador')):
            return redirect()->route('usuarios.index')->withSuccess('Usuário excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    public function perfil($id)
    {
               
        $usuarios = $this->usuarios->find($id);
        
        $tipo = TipoUsuario::pluck('tipo', 'id');
           
            return view('usuarios.perfil', ['usuarios' => $usuarios, 'tipo' => $tipo]);
        
    }
    
    
    //Atualiza perfil no banco de dados
    public function updatePerfil(ClientesRequest $request, $id)
    {
        
        $name          = $request->input('name');
        $email         = $request->input('email');
        $ativo         = $request->input('ativo');
        $id_tipo_users = $request->input('id_tipo_users');
        
        $this->usuarios->find($id)->update([
            'name'          => $name,
            'email'         => $email,
            'ativo'         => $ativo,
            'id_tipo_users' => $id_tipo_users
        ]);        
        
        return redirect()->route('home')->withSuccess('Usuário editado com sucesso');
        
        
    }
    
    public function password($id)
    {
               
        $usuarios = $this->usuarios->find($id);
           
            return view('usuarios.password', ['usuarios' => $usuarios]);
        
    }
    
    
    //Atualiza senha no banco de dados
    public function updatePassword(ClientesRequest $request, $id)
    {
        
        $password               = $request->input('password');
        $password_confirmation  = $request->input('password_confirmation');
        
        if($password != $password_confirmation):
            return redirect()->back()->withErrors('Senha diferentes');
        endif;
        
        $this->usuarios->find($id)->update([
            'password'  => bcrypt($password)
        ]);        
        
        return redirect()->route('home')->withSuccess('Senha editado com sucesso');
        
        
    }
    
    
    //Exibe dados do usuarios
    public function show($id){
        
        $usuarios = $this->usuarios->find($id);
        
        if($this->gate->allows('administrador')):
            return view('usuarios.show', compact('usuarios'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
}
