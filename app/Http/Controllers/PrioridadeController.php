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
        
        
        //Autenticação
        $this->middleware('auth');
        $this->gate = $gate;
        $this->prioridade = $prioridade;
    }
    
    //Listando prioridade
    public function index() 
    {
        
        //listando prioridades
        $prioridade= $this->prioridade->get();
        
        //validação ACL
        if($this->gate->allows('administrador')): 
            return view('prioridade.index', compact('prioridade'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostrar formulário de cadastro de prioridade
    public function create()
    {
        
        //mostra formulário de cadastro de prioridade
        //validação ACL
        if($this->gate->allows('administrador')):  
            return view('prioridade.create');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Salva os dados de prioridade no banco
    public function store(PrioridadeRequest $request)
    {

        //dados do formulário de cadastro de prioridade
        $prioridade = $request->input('prioridade');
        
        $this->prioridade->create([
            'prioridade' => $prioridade
        ]);
        
        //validação ACL
        if($this->gate->allows('administrador')):  
            return redirect()->route('prioridade.index')->withSuccess('Prioridade inserido com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Mostra formulário de edição de prioridade
    public function edit($id)
    {
        
        //buscando prioridade
        $prioridade = $this->prioridade->find($id);
        
        //validação ACL
        if($this->gate->allows('administrador')):                         
            return view('prioridade.edit', ['prioridade' => $prioridade]);
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Atualiza prioridade no banco de dados
    public function update(PrioridadeRequest $request, $id)
    {
        
        //dados do formulário de edição
        $prioridade = $request->input('prioridade');
        
        $this->prioridade->find($id)->update([
            'prioridade' => $prioridade
        ]);
        
        //validação ACL
        if($this->gate->allows('administrador')): 
            return redirect()->route('prioridade.index')->withSuccess('Prioridade editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    
    //Exclui prioridade do banco de dados
    public function destroy($id){
        
        
        //busca prioridade a ser excluída
        $this->prioridade->find($id)->delete();
        
        //validação ACL
        if($this->gate->allows('administrador')): 
            return redirect()->route('prioridade.index')->withSuccess('Prioridade excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
}
