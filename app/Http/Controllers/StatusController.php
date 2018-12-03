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
        
        $this->middleware('auth');
        $this->gate = $gate;
        $this->status = $status;
    }
    
    //Listando os status
    public function index() 
    {
        
        $status = $this->status->get();
        
        if($this->gate->allows('administrador')):  
            return view('status.index', compact('status'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostrar formulário de cadastro de status
    public function create()
    {
        
        if($this->gate->allows('administrador')):  
            return view('status.create');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
        
    }
    
    //Salva os dados do status no banco
    public function store(StatusRequest $request)
    {
        
        $status = $request->input('status');
        
        $this->status->create([
            'status' => $status
        ]);
        
        if($this->gate->allows('administrador')):  
            return redirect()->route('status.index')->withSuccess('Status inserido com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostra formulário de edição de status
    public function edit($id)
    {
        
        $status = $this->status->find($id);
        
        if($this->gate->allows('administrador')):
            return view('status.edit', ['status' => $status]);
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Atualiza o status no banco de dados
    public function update(StatusRequest $request, $id)
    {
        
        $status = $request->input('status');
        
        $this->status->find($id)->update([
            'status' => $status
        ]);
        
        if($this->gate->allows('administrador')):
            return redirect()->route('status.index')->withSuccess('Status editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Exclui status do banco de dados
    public function destroy($id){
        
        $this->status->find($id)->delete();
        
        if($this->gate->allows('administrador')):
            return redirect()->route('status.index')->withSuccess('Status excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
}
