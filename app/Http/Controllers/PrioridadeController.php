<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prioridade;
use App\Http\Requests\PrioridadeRequest;

use \Illuminate\Contracts\Auth\Access\Gate;

class PrioridadeController extends Controller
{
    
    private $gate;
    private $prioridade;
    

    public function __construct(
    Gate $gate,
    Prioridade $prioridade
    ) {
        
        $this->middleware('auth');
        $this->gate = $gate;
        $this->prioridade = $prioridade;
    }
    
    //Listando prioridade
    public function index() 
    {
        
        $prioridade= $this->prioridade->get();
        if($this->gate->allows('administrador')): 
            return view('prioridade.index', compact('prioridade'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostrar formulário de cadastro de prioridade
    public function create()
    {
        if($this->gate->allows('administrador')):  
            return view('prioridade.create');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Salva os dados de prioridade no banco
    public function store(PrioridadeRequest $request)
    {

        $prioridade = $request->input('prioridade');
        
        $this->prioridade->create([
            'prioridade' => $prioridade
        ]);
        if($this->gate->allows('administrador')):  
            return redirect()->route('prioridade.index')->withSuccess('Prioridade inserido com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostra formulário de edição de prioridade
    public function edit($id)
    {
        
        $prioridade = $this->prioridade->find($id);
        if($this->gate->allows('administrador')):                         
            return view('prioridade.edit', ['prioridade' => $prioridade]);
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Atualiza prioridade no banco de dados
    public function update(PrioridadeRequest $request, $id)
    {
        
        $prioridade = $request->input('prioridade');
        
        $this->prioridade->find($id)->update([
            'prioridade' => $prioridade
        ]);
        if($this->gate->allows('administrador')): 
            return redirect()->route('prioridade.index')->withSuccess('Prioridade editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Exclui prioridade do banco de dados
    public function destroy($id){
        
        $this->prioridade->find($id)->delete();
        if($this->gate->allows('administrador')): 
            return redirect()->route('prioridade.index')->withSuccess('Prioridade excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
}
