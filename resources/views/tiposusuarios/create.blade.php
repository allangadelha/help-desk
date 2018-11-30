@extends('layout.template')

@section('title')
Cadastrar Tipos de Usuários
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('tiposUsuarios.index') }}">Tipos de Usuários</a></li>
                    <li class="active"><span>Cadastro de Tipos de Usuários</span></li>
                </ol>
                <h1>Cadastro de Tipos de Usuários</h1>
            </div>
        </div>
        <div class="main-box">
            <header class="main-box-header clearfix">
                <h2>Cadastrar Tipos de Usuários</h2>
            </header>
            <div class="main-box-body clearfix">
                
                @include('mensagens')
                
                {!! Form::open(['route' => 'tiposUsuarios.store', 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('tipo', 'Nome do Tipo de Usuário: ') !!}
                        {!! Form::text('tipo', null, ['class'=>'form-control', 'placeholder' => 'Informe o nome do tipo de usuário...']) !!}
                    </div>  
                    
                    <div class="form-group">                        
                        {{-- Botão de Voltar --}}          
                        <a class="btn btn-danger" href="{{ route('tiposUsuarios.index')}}">Cancelar</a>

                        {{-- Botão de Enviar --}}  
                        {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
</div>

@endsection




