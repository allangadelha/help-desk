@extends('layout.template')
@section('title')
Tipos de Usuários
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>Tipos de Usuários</li>
                </ol>
                <h1>Tipos de Usuários</h1>
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
                                        <th style="width: 40%">ID</th>
                                        <th style="width: 40%">Tipo</th>
                                        <th style="width: 20%; text-align: center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tiposUsuarios as $tu)
                                    <tr>
                                        <td>{{ $tu->id }}</td>
                                        <td>{{ $tu->tipo }}</td>
                                        <td >
                                            <a class="btn btn-primary" href="{{ route('tiposUsuarios.edit', ['id' => $tu->id]) }}">
                                                <span class="fa fa-pencil fa-inverse"></span>
                                            </a>
                                            <a OnClick="return confirm('Deseja mesmo excluir? ESTÁ AÇÃO É IRREVERSÍVEL')"
                                               class="btn btn-danger pull-right" href="{{ route('tiposUsuarios.destroy', ['id' => $tu->id ]) }}" >
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
