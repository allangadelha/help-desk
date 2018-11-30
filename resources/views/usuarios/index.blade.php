@extends('layout.template')
@section('title')
Usuários
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>Usuários</li>
                </ol>
                <h1>Listagem de atendentes</h1>
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
                                        <th>CADASTRADO EM</th>
                                        <th style="width: 20%; text-align: center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $u)
                                    <tr>
                                        <td>{{ $u->id }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->setor->setor }}</td>
                                        <td>
                                            @if($u->ativo == 1) 
                                                <span class="label label-success">Sim</span> 
                                            @else
                                                <span class="label label-danger">Não</span>
                                            @endif
                                        </td>
                                        <td>{{ dataSQLtoPTbr($u->created_at) }}</td>
                                        <td >
                                            <a class="btn btn-primary" href="{{ route('usuarios.show', ['id' => $u->id]) }}">
                                                <span class="fa fa-search-plus fa-inverse"></span>
                                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-primary" href="{{ route('usuarios.edit', ['id' => $u->id]) }}">
                                                <span class="fa fa-pencil fa-inverse"></span>
                                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a OnClick="return confirm('Deseja mesmo excluir? ESTÁ AÇÃO É IRREVERSÍVEL')"
                                               class="btn btn-danger" href="{{ route('usuarios.destroy', ['id' => $u->id ]) }}" >
                                                <span class="fa fa-trash-o fa-inverse"></span>
                                            </a>
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
