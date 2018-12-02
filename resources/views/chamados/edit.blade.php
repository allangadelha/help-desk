@extends('layout.template')

@section('title')
Editar Chamado
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('chamados.index') }}">Chamados</a></li>
                    <li class="active"><span>Editar Chamado</span></li>
                </ol>
                <h1>Editar Chamado</h1>
            </div>
        </div>
        <div class="main-box">
            <header class="main-box-header clearfix">
                <h2>Editar Chamado</h2>
            </header>
            <div class="main-box-body clearfix">
                
                @include('mensagens')
                
                {!! Form::model($chamados, ['route' => ['chamados.update', $chamados->id], 'method' => 'put']) !!}
                    <div class="form-group">
                        <div class="form-group col-lg-8 col-sm-8 col-xl-8">
                            {!! Form::label('titulo', 'Título: ') !!}
                            {!! Form::text('titulo', $chamados->titulo, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                <input type="hidden" name="titulo" value="{{ $chamados->titulo }}">
                        </div>  
                        
                        <div class="form-group col-lg-2 col-sm-2 col-xl-2">
                            {!! Form::label('id_prioridade', 'Prioridade: ') !!}
                            {!! Form::select('id_prioridade', $prioridade, $chamados->id_prioridade, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                <input type="hidden" name="id_prioridade" value="{{ $chamados->id_prioridade }}">
                        </div>
                        
                        <div class="form-group col-lg-2 col-sm-2 col-xl-2">
                            {!! Form::label('id_status', 'Status: ') !!}
                            {!! Form::select('id_status', $status, $chamados->id_status, ['class'=>'form-control']) !!}
                        </div>
                    </div>  
                
                    <div class="form-group">
                        {!! Form::label('descricao', 'Descrição: ') !!}
                        {!! Form::textarea('descricao', $chamados->descricao, ['id' => 'exampleTextarea','class'=>'form-control ckeditor', 'disabled' => 'disabled']) !!}
                        <input type="hidden" name="descricao" value="{{ $chamados->descricao }}">
                    </div> 
                    
                    <div class="form-group">                        
                        {{-- Botão de Voltar --}}          
                        <a class="btn btn-danger" href="{{ route('chamados.index')}}">Cancelar</a>

                        {{-- Botão de Enviar --}}  
                        {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
</div>

@endsection




