@extends('layout.template')
@section('title')
Clientes
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>Clientes</li>
                </ol>
                <h1>Listagem de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">                
                <div class="main-box clearfix">
                    <header class="main-box-header clearfix">
                    </header>
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">
                            
                            @include('mensagens')
                            
                            <table id="table-example" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOME</th>
                                        <th>E-MAIL</th>
                                        <th>SETOR</th>
                                        <th>ATIVO</th>
                                        <th style="width: 20%; text-align: center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->name }}</td>
                                        <td>{{ $c->email }}</td>
                                        <td>{{ $c->setor->setor }}</td>
                                        <td>
                                            @if($c->ativo == 1) 
                                                <span class="label label-success">Sim</span> 
                                            @else
                                                <span class="label label-danger">Não</span>
                                            @endif
                                        </td>
                                        <td >
                                            <a class="btn btn-primary" href="{{ route('clientes.show', ['id' => $c->id]) }}">
                                                <span class="fa fa-search-plus fa-inverse"></span>
                                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-primary" href="{{ route('clientes.edit', ['id' => $c->id]) }}">
                                                <span class="fa fa-pencil fa-inverse"></span>
                                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            @if(Gate::check('administrador'))
                                            <a OnClick="return confirm('Deseja mesmo excluir? ESTÁ AÇÃO É IRREVERSÍVEL')"
                                               class="btn btn-danger" href="{{ route('clientes.destroy', ['id' => $c->id ]) }}" >
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
