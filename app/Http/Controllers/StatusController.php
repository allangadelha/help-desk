<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Status;
use App\Http\Requests\StatusRequest;

class StatusController extends Controller
{
    private $status;
    

    public function __construct(        
    Status $status
    ) {
        
        $this->middleware('auth');
        $this->status = $status;
    }
    
    //Listando os status
    public function index() 
    {
        
        $status = $this->status->get();
        
        return view('status.index', compact('status'));
        
    }
    
    //Mostrar formulário de cadastro de status
    public function create()
    {
        
        return view('status.create');
        
    }
    
    //Salva os dados do status no banco
    public function store(StatusRequest $request)
    {
        
        $status = $request->input('status');
        
        $this->status->create([
            'status' => $status
        ]);
        
        return redirect()->route('status.index')->withSuccess('Status inserido com sucesso');
        
    }
    
    //Mostra formulário de edição de status
    public function edit($id)
    {
        
        $status = $this->status->find($id);
                                
        return view('status.edit', ['status' => $status]);
        
    }
    
    
    //Atualiza o status no banco de dados
    public function update(StatusRequest $request, $id)
    {
        
        $status = $request->input('status');
        
        $this->status->find($id)->update([
            'status' => $status
        ]);
        
        return redirect()->route('status.index')->withSuccess('Status editado com sucesso');
        
    }
    
    
    //Exclui status do banco de dados
    public function destroy($id){
        
        $this->status->find($id)->delete();
        return redirect()->route('status.index')->withSuccess('Status excluído com sucesso');
        
    }
    
}
