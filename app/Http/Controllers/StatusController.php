<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Status;
use App\Http\Requests\StatusRequest;

use \Illuminate\Contracts\Auth\Access\Gate;

class StatusController extends Controller
{
    private $gate;
    private $status;
    

    public function __construct(
    Gate $gate,       
    Status $status
    ) {
        
        //Autenticação
        $this->middleware('auth');
        $this->gate = $gate;
        $this->status = $status;
    }
    
    //Listando os status
    public function index() 
    {
        
        //lista status
        $status = $this->status->get();
        
        //validação ACL
        if($this->gate->allows('administrador')):  
            return view('status.index', compact('status'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostrar formulário de cadastro de status
    public function create()
    {
        
        //mostra formulário de criação de status
        //validação ACL
        if($this->gate->allows('administrador')):  
            return view('status.create');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
        
    }
    
    //Salva os dados do status no banco
    public function store(StatusRequest $request)
    {
        
        //dados do formulário de criação de status
        $status = $request->input('status');
        
        $this->status->create([
            'status' => $status
        ]);
        
        //validação ACL
        if($this->gate->allows('administrador')):  
            return redirect()->route('status.index')->withSuccess('Status inserido com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostra formulário de edição de status
    public function edit($id)
    {
        
        //busca status a ser editado
        $status = $this->status->find($id);
        
        //validação ACL
        if($this->gate->allows('administrador')):
            return view('status.edit', ['status' => $status]);
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Atualiza o status no banco de dados
    public function update(StatusRequest $request, $id)
    {
        
        //dados do formulário de edição de status
        $status = $request->input('status');
        
        $this->status->find($id)->update([
            'status' => $status
        ]);
        
        //validação ACL
        if($this->gate->allows('administrador')):
            return redirect()->route('status.index')->withSuccess('Status editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Exclui status do banco de dados
    public function destroy($id){
        
        //busca status a ser excluído 
        $this->status->find($id)->delete();
        
        //validação ACL
        if($this->gate->allows('administrador')):
            return redirect()->route('status.index')->withSuccess('Status excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
}
