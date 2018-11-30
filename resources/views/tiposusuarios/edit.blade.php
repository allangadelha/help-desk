@extends('layout.template')

@section('title')
Editar Tipos de Usuários
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('prioridade.index') }}">Tipos de Usuários</a></li>
                    <li class="active"><span>Editar Tipos de Usuários</span></li>
                </ol>
                <h1>Editar Tipos de Usuários</h1>
            </div>
        </div>
        <div class="main-box">
            <header class="main-box-header clearfix">
                <h2>Editar Tipos de Usuários</h2>
            </header>
            <div class="main-box-body clearfix">
                
                @include('mensagens')
                
                {!! Form::model($tiposUsuarios, ['route' => ['tiposUsuarios.update', $tiposUsuarios->id], 'method' => 'put']) !!}
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




