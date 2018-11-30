@extends('layout.template')
@section('title')
Detalhes do Cliente
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
                    <li class="active"><span>Detalhes do cliente</span></li>
                </ol>
                <h1>Detalhes do cliente</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">                
                <div class="main-box clearfix">
                    <header class="main-box-header clearfix">
                    </header>
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Nome:                                        
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {{ $clientes->name }}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            E-mail:                                        
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {{ $clientes->email }}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Telefone:                                        
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {{ $clientes->telefone }}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Setor:                                        
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {{ $clientes->setor->setor }}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">                        
                            {{-- Botão de Voltar --}}          
                            <a class="btn btn-danger" href="{{ route('clientes.index')}}">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
