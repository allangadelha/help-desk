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
        
        //Autenticação
        $this->middleware('auth');
        $this->gate = $gate;
        $this->chamados = $chamados;
    }
    
    //Listando os chamados em atendimento
    public function index() 
    {
        
        //Listando atendimento
        $chamados = $this->chamados->get();
        
        //validação ACL 
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')):
            return view('chamados/index', compact('chamados'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    //Listando os chamados em aberto
    public function emAberto() 
    {
        
        //listando chamados em aberto
        $chamados = $this->chamados->where('id_status', '=', 1)->get();
        
        //validação ACL 
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')):
            return view('chamados.emaberto', compact('chamados'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Listando os chamados em atendimento
    public function emAtendimento() 
    {
        
        //listando chamados em atendimento
        $chamados = $this->chamados->where('id_status', '=', 2)->get();
        
        //validação ACL 
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')):
            return view('chamados.ematendimento', compact('chamados'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Listando os chamados atendidos
    public function atendidos() 
    {
        
        //listando chamados atendidos
        $chamados = $this->chamados->where('id_status', '=', 3)->get();
        
        //validação ACL 
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')):
            return view('chamados.atendidos', compact('chamados'));
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Listando os chamados do cliente logado
    public function meusChamados() 
    {
        
        //listando chamados do cliente logado
        $chamados = $this->chamados->where('id_u_solicita', '=', auth()->user()->id)->get();
                              
            return view('chamados.meuschamados', compact('chamados'));
        
    }
        
    //Mostrar formulário de cadastro de chamado
    public function create()
    {
        
        //listando prioridades
        $prioridade = Prioridade::pluck('prioridade', 'id');
        return view('chamados.create', compact('prioridade'));
        
    }
    
    //Salva os dados do chamado no banco
    public function store(ChamadoRequest $request)
    {
        
        //dados do formulário de criação de chamados
        $titulo         = $request->input('titulo');
        $descricao      = $request->input('descricao');
        $id_prioridade  = intval($request->input('id_prioridade'));
                
        $this->chamados->create([
            'titulo'        => $titulo,
            'descricao'     => $descricao,
            'id_prioridade' => $id_prioridade,
            'id_u_solicita' => auth()->user()->id
        ]);
        
        //validação ACL 
        if($this->gate->allows('cliente')):  
            return redirect()->route('chamados.meuschamados')->withSuccess('Chamado inserido com sucesso');
        else:
            return redirect()->route('chamados.index')->withSuccess('Chamado inserido com sucesso');
        endif;
        
    }
    
    //Mostra formulário de edição de chamado
    public function edit($id)
    {
        
        //buscando chamado
        $chamados = $this->chamados->find($id);
        
        //listando prioridades
        $prioridade = Prioridade::pluck('prioridade', 'id');
        
        //listando status
        $status = Status::pluck('status', 'id');
         
        //validação ACL 
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
        
        //dados do formulário de edição
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
        
        //validação ACL 
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')): 
            return redirect()->route('chamados.index')->withSuccess('Chamado editado com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Exclui chamado do banco de dados
    public function destroy($id){
        
        //busca chamado a ser excluído
        $this->chamados->find($id)->delete();
        
        //validação ACL 
        if($this->gate->allows('administrador')): 
            return redirect()->route('chamados.index')->withSuccess('Chamado excluído com sucesso');
        else:
            return redirect('home')->withErrors('Você não tem acesso a página. Contate o administrador');
        endif;
        
    }
    
    //Exibe dados do chamado
    public function show($id){
        
        //busca chamado a ser mostrado
        $chamados = $this->chamados->find($id);
        
        return view('chamados.show', compact('chamados'));
        
    }
}
