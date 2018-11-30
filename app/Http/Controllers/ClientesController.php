<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\ClientesRequest;

use App\TipoUsuario;

class ClientesController extends Controller
{
    
    private $clientes;
    

    public function __construct(        
    User $clientes
    ) {
        
        $this->middleware('auth');
        $this->clientes = $clientes;
    }
    
    //Listando cliente
    public function index() 
    {
        
        $clientes = $this->clientes->where('id_tipo_users', 3)->get();
        
        return view('clientes.index', compact('clientes'));
        
    }
        
    //Mostra formulário de edição de cliente
    public function edit($id)
    {
        
        $clientes = $this->clientes->find($id);
        
        $tipo = TipoUsuario::pluck('tipo', 'id');
                                
        return view('clientes.edit', ['clientes' => $clientes, 'tipo' => $tipo]);
        
    }
    
    
    //Atualiza cliente no banco de dados
    public function update(ClientesRequest $request, $id)
    {
        
        $name          = $request->input('name');
        $email         = $request->input('email');
        $ativo         = $request->input('ativo');
        $id_tipo_users = $request->input('id_tipo_users');
        
        $this->clientes->find($id)->update([
            'name'          => $name,
            'email'         => $email,
            'ativo'         => $ativo,
            'id_tipo_users' => $id_tipo_users
        ]);
        
        return redirect()->route('clientes.index')->withSuccess('Cliente editado com sucesso');
        
    }
        
    //Exclui cliente do banco de dados
    public function destroy($id){
        
        $this->clientes->find($id)->delete();
        return redirect()->route('clientes.index')->withSuccess('Cliente excluído com sucesso');
        
    }
    
    
    //Exibe dados do cliente
    public function show($id){
        
        $clientes = $this->clientes->find($id);
        return view('clientes.show', compact('clientes'));
        
    }
    
}
