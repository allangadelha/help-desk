@extends('layout.template')

@section('title')
Cadastrar Prioridade
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('prioridade.index') }}">Prioridades</a></li>
                    <li class="active"><span>Cadastro de prioridades</span></li>
                </ol>
                <h1>Cadastro de prioridades</h1>
            </div>
        </div>
        <div class="main-box">
            <header class="main-box-header clearfix">
                <h2>Cadastrar prioridades</h2>
            </header>
            <div class="main-box-body clearfix">
                
                @include('mensagens')
                
                {!! Form::open(['route' => 'prioridade.store', 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('prioridade', 'Nome da Prioridade: ') !!}
                        {!! Form::text('prioridade', null, ['class'=>'form-control', 'placeholder' => 'Informe o nome da prioridade...']) !!}
                    </div>  
                    
                    <div class="form-group">                        
                        {{-- Botão de Voltar --}}          
                        <a class="btn btn-danger" href="{{ route('prioridade.index')}}">Cancelar</a>

                        {{-- Botão de Enviar --}}  
                        {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
</div>

@endsection




