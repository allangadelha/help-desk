@extends('layout.template')

@section('title')
Editar Cliente
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
                    <li class="active"><span>Editar setor</span></li>
                </ol>
                <h1>Editar cliente</h1>
            </div>
        </div>
        <div class="main-box">
            <header class="main-box-header clearfix">
                <h2>Editar cliente</h2>
            </header>
            <div class="main-box-body clearfix">
                
                @include('mensagens')
                
                {!! Form::model($clientes, ['route' => ['clientes.update', $clientes->id], 'method' => 'put']) !!}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-xl-6">
                                {!! Form::label('name', 'Nome: ') !!}
                                {!! Form::text('name', $clientes->name, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                <input type="hidden" name="name" value="{{ $clientes->name }}">
                            </div>

                            <div class="col-lg-6 col-sm-6 col-xl-6">
                                {!! Form::label('email', 'E-mail: ') !!}
                                {!! Form::text('email', $clientes->email, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                <input type="hidden" name="email" value="{{ $clientes->email }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-xl-4">
                                {!! Form::label('telefone', 'Telefone: ') !!}
                                {!! Form::text('telefone', $clientes->telefone, ['class'=>'form-control', 'placeholder' => 'Telefone']) !!}
                            </div>
                            <div class="col-lg-4 col-sm-4 col-xl-4">
                                {!! Form::label('id_tipo_users', 'Tipo de Usuário: ') !!}
                                {!! Form::select('id_tipo_users', $tipo, $clientes->id_tipo_users, ['class'=>'form-control']) !!}
                            </div>
                            <div class="col-lg-4 col-sm-4 col-xl-4">
                                {!! Form::label('ativo', 'Ativo: ') !!}
                                {!! Form::select('ativo', ['1' => 'Sim', '0' => 'Não'], $clientes->ativo, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>  
                    
                    <div class="form-group">                        
                        {{-- Botão de Voltar --}}          
                        <a class="btn btn-danger" href="{{ route('clientes.index')}}">Cancelar</a>

                        {{-- Botão de Enviar --}}  
                        {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
</div>

@endsection




