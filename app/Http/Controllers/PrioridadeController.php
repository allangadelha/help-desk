<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prioridade;
use App\Http\Requests\PrioridadeRequest;

class PrioridadeController extends Controller
{
    
    private $prioridade;
    

    public function __construct(        
    Prioridade $prioridade
    ) {
        
        $this->middleware('auth');
        $this->prioridade = $prioridade;
    }
    
    //Listando prioridade
    public function index() 
    {
        
        $prioridade= $this->prioridade->get();
        
        return view('prioridade.index', compact('prioridade'));
        
    }
    
    //Mostrar formulário de cadastro de prioridade
    public function create()
    {
        
        return view('prioridade.create');
        
    }
    
    //Salva os dados de prioridade no banco
    public function store(PrioridadeRequest $request)
    {
//        dd($request->all());
        $prioridade = $request->input('prioridade');
        
        $this->prioridade->create([
            'prioridade' => $prioridade
        ]);
        
        return redirect()->route('prioridade.index')->withSuccess('Prioridade inserido com sucesso');
        
    }
    
    //Mostra formulário de edição de prioridade
    public function edit($id)
    {
        
        $prioridade = $this->prioridade->find($id);
                                
        return view('prioridade.edit', ['prioridade' => $prioridade]);
        
    }
    
    
    //Atualiza prioridade no banco de dados
    public function update(PrioridadeRequest $request, $id)
    {
        
        $prioridade = $request->input('prioridade');
        
        $this->prioridade->find($id)->update([
            'prioridade' => $prioridade
        ]);
        
        return redirect()->route('prioridade.index')->withSuccess('Prioridade editado com sucesso');
        
    }
    
    
    //Exclui prioridade do banco de dados
    public function destroy($id){
        
        $this->prioridade->find($id)->delete();
        return redirect()->route('prioridade.index')->withSuccess('Prioridade excluído com sucesso');
        
    }
    
}
