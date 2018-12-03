@extends('layout.template')
@section('title')
Detalhes do Chamado
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('chamados.index') }}">Chamados</a></li>
                    <li class="active"><span>Detalhes do chamado</span></li>
                </ol>
                <h1>Detalhes do Chamado</h1>
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
                                            Título:                                        
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {{ $chamados->titulo }}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Descrição:
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {!! $chamados->descricao !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Aberto por:
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {!! $chamados->cliente->name !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Aberto por:
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {!! $chamados->cliente->name !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Atendido por:
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {!! $chamados->atendente->name !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Aberto em:
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {!! $chamados->created_at !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Atendido em:
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {!! $chamados->upated_at !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Status:
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {!! $chamados->statuses->status !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
