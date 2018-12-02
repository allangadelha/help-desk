@extends('layout.template')

@section('title')
Cadastrar Chamado
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('chamados.index') }}">Chamados</a></li>
                    <li class="active"><span>Cadastro de chamados</span></li>
                </ol>
                <h1>Cadastro de chamados</h1>
            </div>
        </div>
        <div class="main-box">
            <header class="main-box-header clearfix">
                <h2>Cadastrar chamado</h2>
            </header>
            <div class="main-box-body clearfix">
                
                @include('mensagens')
                
                {!! Form::open(['route' => 'chamados.store', 'method' => 'post']) !!}
                        
                    <div class="form-group">
                        <div class="form-group col-lg-9 col-sm-9 col-xl-9">
                            {!! Form::label('titulo', 'Título: ') !!}
                            {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder' => 'Informe um título para o chamado...']) !!}
                        </div>  
                        
                        <div class="form-group col-lg-3 col-sm-3 col-xl-3">
                            {!! Form::label('id_prioridade', 'Prioridade: ') !!}
                            {!! Form::select('id_prioridade', $prioridade, 1, ['class'=>'form-control']) !!}
                        </div>
                    </div>  
                
                    <div class="form-group">
                        {!! Form::label('descricao', 'Descrição: ') !!}
                        {!! Form::textarea('descricao', null, ['id' => 'exampleTextarea','class'=>'form-control ckeditor', 'placeholder' => 'Informe um título para o chamado...']) !!}
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




