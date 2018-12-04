<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chamado;
use App\User;
use App\Status;
use App\Prioridade;

use App\Http\Requests\ChamadoRequest;

use \Illuminate\Contracts\Auth\Access\Gate;

class ChamadosController extends Controller
{
    
    private $gate;
    private $chamados;
    

    public function __construct(  
    Gate $gate,      
    Chamado $chamados
    ) {
        
        $this->middleware('auth');
        $this->gate = $gate;
        $this->chamados = $chamados;
    }
    
    //Listando os chamados em atendimento
    public function index() 
    {
        
        $chamados = $this->chamados->get();
        
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')):
            return view('chamados.index', compact('chamados'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    //Listando os chamados em aberto
    public function emAberto() 
    {
        
        $chamados = $this->chamados->where('id_status', '=', 1)->get();
        
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')):
            return view('chamados.emaberto', compact('chamados'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Listando os chamados em atendimento
    public function emAtendimento() 
    {
        
        $chamados = $this->chamados->where('id_status', '=', 2)->get();
        
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')):
            return view('chamados.ematendimento', compact('chamados'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Listando os chamados em atendimento
    public function atendidos() 
    {
        
        $chamados = $this->chamados->where('id_status', '=', 3)->get();
        
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')):
            return view('chamados.atendidos', compact('chamados'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Listando os chamados do cliente logado
    public function meusChamados() 
    {
        
        $chamados = $this->chamados->where('id_u_solicita', '=', auth()->user()->id)->get();
                              
            return view('chamados.meuschamados', compact('chamados'));
        
    }
        
    //Mostrar formulário de cadastro de chamado
    public function create()
    {
        $prioridade = Prioridade::pluck('prioridade', 'id');
            return view('chamados.create', compact('prioridade'));
        
    }
    
    //Salva os dados do chamado no banco
    public function store(ChamadoRequest $request)
    {
        
        $titulo         = $request->input('titulo');
        $descricao      = $request->input('descricao');
        $id_prioridade  = intval($request->input('id_prioridade'));
                
        $this->chamados->create([
            'titulo'        => $titulo,
            'descricao'     => $descricao,
            'id_prioridade' => $id_prioridade,
            'id_u_solicita' => auth()->user()->id
        ]);
        
        if($this->gate->allows('cliente')):  
            return redirect()->route('chamados.meuschamados')->withSuccess('Chamado inserido com sucesso');
        else:
            return redirect()->route('chamados.index')->withSuccess('Chamado inserido com sucesso');
        endif;
        
    }
    
    //Mostra formulário de edição de chamado
    public function edit($id)
    {
        
        $chamados = $this->chamados->find($id);
        $prioridade = Prioridade::pluck('prioridade', 'id');
        $status = Status::pluck('status', 'id');
         
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')): 
            return view('chamados.edit', [
                'chamados' => $chamados, 
                'prioridade' => $prioridade,
                'status' => $status
            ]);
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
        
    //Atualiza o chamado no banco de dados
    public function update(ChamadoRequest $request, $id)
    {
        
        $titulo         = $request->input('titulo');
        $descricao      = $request->input('descricao');
        $id_prioridade  = intval($request->input('id_prioridade'));
        $id_status      = intval($request->input('id_status'));
        
        $this->chamados->find($id)->update([
            'titulo'        => $titulo,
            'descricao'     => $descricao,
            'id_prioridade' => $id_prioridade,
            'id_status'     => $id_status,
            'id_u_solicita' => auth()->user()->id
        ]);
        
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')): 
            return redirect()->route('chamados.index')->withSuccess('Chamado editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Exclui chamado do banco de dados
    public function destroy($id){
        
        $this->chamados->find($id)->delete();
        if($this->gate->allows('administrador')): 
            return redirect()->route('chamados.index')->withSuccess('Chamado excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Exibe dados do chamado
    public function show($id){
        
        $chamados = $this->chamados->find($id);
        
        return view('chamados.show', compact('chamados'));
        
    }
}
