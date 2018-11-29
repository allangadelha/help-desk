@extends('layout.template')
@section('title')
Setores
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>Setores</li>
                </ol>
                <h1>Listagem de setores</h1>
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
                                        <th style="width: 40%">Setor</th>
                                        <th style="width: 20%; text-align: center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($setorCliente as $sc)
                                    <tr>
                                        <td>{{ $sc->id }}</td>
                                        <td>{{ $sc->setor }}</td>
                                        <td >
                                            <a class="btn btn-primary" href="{{ route('setoresClientes.show', ['id' => $sc->id]) }}">
                                                <span class="fa fa-search-plus fa-inverse"></span>
                                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-primary" href="{{ route('setoresClientes.edit', ['id' => $sc->id]) }}">
                                                <span class="fa fa-pencil fa-inverse"></span>
                                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a OnClick="return confirm('Deseja mesmo excluir? ESTÁ AÇÃO É IRREVERSÍVEL')"
                                               class="btn btn-danger" href="{{ route('setoresClientes.destroy', ['consulta' => $sc->id ]) }}" >
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
