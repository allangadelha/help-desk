@extends('layout.template')

@section('title')
Editar Atendente
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('atendentes.index') }}">Atendentes</a></li>
                    <li class="active"><span>Editar setor</span></li>
                </ol>
                <h1>Editar atendente</h1>
            </div>
        </div>
        <div class="main-box">
            <header class="main-box-header clearfix">
                <h2>Editar atendente</h2>
            </header>
            <div class="main-box-body clearfix">
                
                @include('mensagens')
                
                {!! Form::model($atendentes, ['route' => ['atendentes.update', $atendentes->id], 'method' => 'put']) !!}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-xl-4">
                                {!! Form::label('name', 'Nome: ') !!}
                                {!! Form::text('name', $atendentes->name, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                <input type="hidden" name="name" value="{{ $atendentes->name }}">
                            </div>

                            <div class="col-lg-4 col-sm-4 col-xl-4">
                                {!! Form::label('email', 'E-mail: ') !!}
                                {!! Form::text('email', $atendentes->email, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                <input type="hidden" name="email" value="{{ $atendentes->email }}">
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xl-2">
                                {!! Form::label('id_tipo_users', 'Tipo de Usuário: ') !!}
                                {!! Form::select('id_tipo_users', $tipo, $atendentes->id_tipo_users, ['class'=>'form-control']) !!}
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xl-2">
                                {!! Form::label('ativo', 'Ativo: ') !!}
                                {!! Form::select('ativo', ['1' => 'Sim', '0' => 'Não'], $atendentes->ativo, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>  
                    
                    <div class="form-group">                        
                        {{-- Botão de Voltar --}}          
                        <a class="btn btn-danger" href="{{ route('atendentes.index')}}">Cancelar</a>

                        {{-- Botão de Enviar --}}  
                        {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
</div>

@endsection




