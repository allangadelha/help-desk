@extends('layout.template')
@section('title')
Meus Chamados
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>Meus Chamados</li>
                </ol>
                <h1>Meus Chamados</h1>
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
                                        <th>TÍTULO</th>
                                        <th>ATENDENTE</th>
                                        <th>SOLICITADO POR</th>
                                        <th>STATUS</th>
                                        <th>CRIADO EM</th>
                                        <th>FINALIZADO EM</th>
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
                                        <td>{{ dataSQLtoPTbr($c->updated_at) }}</td>
                                        <td >
                                            <a class="btn btn-primary" href="{{ route('chamados.show', ['id' => $c->id]) }}">
                                                <span class="fa fa-search-plus fa-inverse"></span>
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
