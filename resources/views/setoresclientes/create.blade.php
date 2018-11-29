@extends('layout.template')

@section('title')
Cadastrar Setor
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('setoresClientes.index') }}">Setores</a></li>
                    <li class="active"><span>Cadastro de setores</span></li>
                </ol>
                <h1>Cadastro de setores</h1>
            </div>
        </div>
        <div class="main-box">
            <header class="main-box-header clearfix">
                <h2>Cadastrar setor</h2>
            </header>
            <div class="main-box-body clearfix">
                
                @include('mensagens')
                
                {!! Form::open(['route' => 'setoresClientes.store', 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('setor', 'Nome do Setor: ') !!}
                        {!! Form::text('setor', null, ['class'=>'form-control', 'placeholder' => 'Informe o nome do setor...']) !!}
                    </div>  
                    
                    <div class="form-group">                        
                        {{-- Botão de Voltar --}}          
                        <a class="btn btn-danger" href="{{ route('setoresClientes.index')}}">Cancelar</a>

                        {{-- Botão de Enviar --}}  
                        {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
</div>

@endsection




