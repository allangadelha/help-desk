@extends('layout.template')

@section('title')
Cadastrar Status
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('status.index') }}">Status</a></li>
                    <li class="active"><span>Cadastro de status</span></li>
                </ol>
                <h1>Cadastro de status</h1>
            </div>
        </div>
        <div class="main-box">
            <header class="main-box-header clearfix">
                <h2>Cadastrar status</h2>
            </header>
            <div class="main-box-body clearfix">
                
                @include('mensagens')
                
                {!! Form::open(['route' => 'status.store', 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('status', 'Nome do Status: ') !!}
                        {!! Form::text('status', null, ['class'=>'form-control', 'placeholder' => 'Informe o nome do status...']) !!}
                    </div>  
                    
                    <div class="form-group">                        
                        {{-- Botão de Voltar --}}          
                        <a class="btn btn-danger" href="{{ route('status.index')}}">Cancelar</a>

                        {{-- Botão de Enviar --}}  
                        {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
</div>

@endsection




