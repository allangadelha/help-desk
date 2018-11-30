@extends('layout.template')

@section('title')
Editar Usuário
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('usuarios.index') }}">Usuários</a></li>
                    <li class="active"><span>Editar setor</span></li>
                </ol>
                <h1>Editar usuário</h1>
            </div>
        </div>
        <div class="main-box">
            <header class="main-box-header clearfix">
                <h2>Editar usuário</h2>
            </header>
            <div class="main-box-body clearfix">
                
                @include('mensagens')
                
                {!! Form::model($usuarios, ['route' => ['usuarios.update', $usuarios->id], 'method' => 'put']) !!}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-xl-4">
                                {!! Form::label('name', 'Nome: ') !!}
                                {!! Form::text('name', $usuarios->name, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                <input type="hidden" name="name" value="{{ $usuarios->name }}">
                            </div>

                            <div class="col-lg-4 col-sm-4 col-xl-4">
                                {!! Form::label('email', 'E-mail: ') !!}
                                {!! Form::text('email', $usuarios->email, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                <input type="hidden" name="email" value="{{ $usuarios->email }}">
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xl-2">
                                {!! Form::label('id_tipo_users', 'Tipo de Usuário: ') !!}
                                {!! Form::select('id_tipo_users', $tipo, $usuarios->id_tipo_users, ['class'=>'form-control']) !!}
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xl-2">
                                {!! Form::label('ativo', 'Ativo: ') !!}
                                {!! Form::select('ativo', ['1' => 'Sim', '0' => 'Não'], $usuarios->ativo, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>  
                    
                    <div class="form-group">                        
                        {{-- Botão de Voltar --}}          
                        <a class="btn btn-danger" href="{{ route('usuarios.index')}}">Cancelar</a>

                        {{-- Botão de Enviar --}}  
                        {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
</div>

@endsection




