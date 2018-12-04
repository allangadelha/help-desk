<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SetorCliente;

use App\Http\Requests\SetorRequest;

use \Illuminate\Contracts\Auth\Access\Gate;

class SetorClienteController extends Controller
{
    
    private $gate;
    private $setorCliente;
    

    public function __construct(
    Gate $gate,       
    SetorCliente $setorCliente
    ) {
        
        //Autenticação
        $this->middleware('auth');
        $this->gate = $gate;
        $this->setorCliente = $setorCliente;
    }
    
    //Listando os setores
    public function index() 
    {
        
        $setorCliente = $this->setorCliente->get();
        
        //validação ACL
        if($this->gate->allows('administrador')): 
            return view('setoresclientes.index', compact('setorCliente'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostrar formulário de cadastro de setores
    public function create()
    {
        
        //mostra formulário de cadastro de setor
        //validação ACL
        if($this->gate->allows('administrador')): 
            return view('setoresclientes.create');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Salva os dados do setor no banco
    public function store(SetorRequest $request)
    {
        
        //dados do formulário de setor
        $setor = $request->input('setor');
        
        $this->setorCliente->create([
            'setor' => $setor
        ]);
        
        //validação ACL
        if($this->gate->allows('administrador')): 
            return redirect()->route('setoresClientes.index')->withSuccess('Setor inserido com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
        
    }
    
    //Mostra formulário de edição de setor
    public function edit($id)
    {
        //busca setor
        $setorCliente = $this->setorCliente->find($id);
        
        //validação ACL
        if($this->gate->allows('administrador')):                         
            return view('setoresClientes.edit', ['setorCliente' => $setorCliente]);
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
        
    //Atualiza o setor no banco de dados
    public function update(SetorRequest $request, $id)
    {
        
        //dados do formulário de edição de setor
        $setor = $request->input('setor');
        
        $this->setorCliente->find($id)->update([
            'setor' => $setor
        ]);
        
        //validação ACL
        if($this->gate->allows('administrador')):   
            return redirect()->route('setoresClientes.index')->withSuccess('Setor editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Exclui setor do banco de dados
    public function destroy($id){
        
        //busca setor a ser excluído
        $this->setorCliente->find($id)->delete();
        
        //validação ACL
        if($this->gate->allows('administrador')):   
            return redirect()->route('setoresClientes.index')->withSuccess('Setor excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Exibe dados do setor
    public function show($id){
        
        //busca setor a ser mostrado
        $setorCliente = $this->setorCliente->find($id);
        
        //validação ACL
        if($this->gate->allows('administrador')):   
            return view('setoresclientes.show', compact('setorCliente'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
}
