@extends('layout.template')
@section('title')
Prioridades
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>Prioridades</li>
                </ol>
                <h1>Listagem de prioridade</h1>
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
                                        <th style="width: 40%">Prioridades</th>
                                        <th style="width: 20%; text-align: center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($prioridade as $p)
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->prioridade }}</td>
                                        <td >
                                            <a class="btn btn-primary" href="{{ route('prioridade.edit', ['id' => $p->id]) }}">
                                                <span class="fa fa-pencil fa-inverse"></span>
                                            </a>
                                            <a OnClick="return confirm('Deseja mesmo excluir? ESTÁ AÇÃO É IRREVERSÍVEL')"
                                               class="btn btn-danger pull-right" href="{{ route('prioridade.destroy', ['id' => $p->id ]) }}" >
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
