@extends('layout.template')
    @section('title')
        Dashborad
    @endsection

@section('content')
<div class="row" style="opacity: 1;">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div id="content-header" class="clearfix">
                    <div class="pull-left">
                        <ol class="breadcrumb">
                            <li><a href="#">Início</a></li>
                            <li class="active"><span>Dashboard</span></li>
                        </ol>
                        <h1>Dashboard</h1>
                    </div>
                    <div class="pull-right hidden-xs">
                        <div class="xs-graph pull-left">
                            <div class="graph-label">
                                <b><i class="fa fa-comment"></i> {{ App\Chamado::count() }}</b> Chamados
                            </div>
                            <div class="graph-content spark-orders"><canvas width="125" height="25" style="display: inline-block; width: 125px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(Gate::check('administrador'))
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="main-box infographic-box colored emerald-bg">
                    <i class="fa fa-comment"></i>
                    <span class="headline">Chamados</span>
                    <span class="value">{{ App\Chamado::count() }}</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="main-box infographic-box colored green-bg">
                    <i class="fa fa-users"></i>
                    <span class="headline">Clientes</span>
                    <span class="value">{{ App\User::where('id_tipo_users', '=', 3)->count() }}</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="main-box infographic-box colored red-bg">
                    <i class="fa fa-headphones"></i>
                    <span class="headline">Atendentes</span>
                    <span class="value">{{ App\User::where('id_tipo_users', '<>', 3)->count() }}</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="main-box infographic-box colored purple-bg">
                    <i class="fa fa-institution"></i>
                    <span class="headline">Setores</span>
                    <span class="value">{{ App\SetorCliente::all()->count() }}</span>
                </div>
            </div>
        </div>
        @endif
        
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box clearfix">
                    <header class="main-box-header clearfix">
                        <h2 class="pull-left"> Últimos chamados</h2>
                    </header>
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">
                            
                            @include('mensagens')
                            
                            <table id="table-example" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>TÍTULO</th>
                                        <th>ATENDENTE</th>
                                        <th>SOLICITADO POR</th>
                                        <th>STATUS</th>
                                        <th>CRIADO EM</th>
                                        <th style="text-align: center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($chamados as $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->titulo }}</td>
                                        <td>{{ $c->atendente->name }}</td>
                                        <td>{{ $c->cliente->name }}</td>
                                        <td>
                                            {{ $c->statuses->status }}
                                        </td>
                                        <td>{{ dataSQLtoPTbr($c->created_at) }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('chamados.show', ['id' => $c->id]) }}">
                                                <span class="fa fa-search-plus fa-inverse"></span>
                                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-primary" href="{{ route('chamados.edit', ['id' => $c->id]) }}">
                                                <span class="fa fa-pencil fa-inverse"></span>
                                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            @if(Gate::check('administrador'))
                                            <a OnClick="return confirm('Deseja mesmo excluir? ESTÁ AÇÃO É IRREVERSÍVEL')"
                                               class="btn btn-danger" href="{{ route('chamados.destroy', ['id' => $c->id ]) }}" >
                                                <span class="fa fa-trash-o fa-inverse"></span>
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
