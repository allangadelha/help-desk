<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SetorCliente;

use App\Http\Requests\SetorRequest;

class SetorClienteController extends Controller
{
    
    private $setorCliente;
    

    public function __construct(        
    SetorCliente $setorCliente
    ) {
        
        $this->middleware('auth');
        $this->setorCliente = $setorCliente;
    }
    
    //Listando os setores
    public function index() 
    {
        
        $setorCliente = $this->setorCliente->get();
        
        return view('setoresclientes.index', compact('setorCliente'));
        
    }
    
    //Mostrar formulário de cadastro de setores
    public function create()
    {
        
        return view('setoresclientes.create');
        
    }
    
    //Salva os dados do setor no banco
    public function store(SetorRequest $request)
    {
        
        $setor = $request->input('setor');
        
        $this->setorCliente->create([
            'setor' => $setor
        ]);
        
        return redirect()->route('setoresClientes.index')->withSuccess('Setor inserido com sucesso');
        
    }
    
    //Mostra formulário de edição de setor
    public function edit($id)
    {
        
        $setorCliente = $this->setorCliente->find($id);
                                
        return view('setoresClientes.edit', ['setorCliente' => $setorCliente]);
        
    }
        
    //Atualiza o setor no banco de dados
    public function update(SetorRequest $request, $id)
    {
        
        $setor = $request->input('setor');
        
        $this->setorCliente->find($id)->update([
            'setor' => $setor
        ]);
        
        return redirect()->route('setoresClientes.index')->withSuccess('Setor editado com sucesso');
        
    }
    
    //Exclui setor do banco de dados
    public function destroy($id){
        
        $this->setorCliente->find($id)->delete();
        return redirect()->route('setoresClientes.index')->withSuccess('Setor excluído com sucesso');
        
    }
    
    //Exibe dados do setor
    public function show($id){
        
        $setorCliente = $this->setorCliente->find($id);
        return view('setoresclientes.show', compact('setorCliente'));
        
    }
    
}
