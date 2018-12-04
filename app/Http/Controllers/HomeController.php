<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;

use \Illuminate\Contracts\Auth\Access\Gate;

class HomeController extends Controller
{
    
    private $gate;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Gate $gate)
    {
        $this->middleware('auth');
        $this->gate = $gate;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $chamados = Chamado::skip(0)->take(10)->get();       
        
        //validação ACL 
        if($this->gate->allows('administrador') || $this->gate->allows('atendente')):
            return view('home', compact('chamados'));
        else:
            return redirect('chamados/meuschamados');
        endif;
        
    }
}
