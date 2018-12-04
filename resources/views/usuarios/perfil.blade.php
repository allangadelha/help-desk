@extends('layout.template')
@section('title')
Meu dados
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="active"><span>Meus dados</span></li>
                </ol>
                <h1>Meus dados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">                
                <div class="main-box clearfix">
                    <header class="main-box-header clearfix">
                    </header>
                    <div class="main-box-body clearfix">

                        @include('mensagens')
                        <?php // dd($usuarios); ?>

                        {!! Form::model($usuarios, ['route' => ['usuarios.updatePerfil', $usuarios->id], 'method' => 'put']) !!}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4 col-xl-4">
                                    {!! Form::label('name', 'Nome: ') !!}
                                    {!! Form::text('name', $usuarios->name, ['class'=>'form-control']) !!}
                                </div>

                                <div class="col-lg-4 col-sm-4 col-xl-4">
                                    {!! Form::label('email', 'E-mail: ') !!}
                                    {!! Form::text('email', $usuarios->email, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                    <input type="hidden" name="email" value="{{ $usuarios->email }}">
                                </div>
                                <div class="col-lg-2 col-sm-2 col-xl-2">
                                    {!! Form::label('id_tipo_users', 'Tipo de Usuário: ') !!}
                                    {!! Form::select('id_tipo_users', $tipo, $usuarios->id_tipo_users, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                    <input type="hidden" name="id_tipo_users" value="{{ $usuarios->id_tipo_users }}">
                                </div>
                                <div class="col-lg-2 col-sm-2 col-xl-2">
                                    {!! Form::label('ativo', 'Ativo: ') !!}
                                    {!! Form::select('ativo', ['1' => 'Sim', '0' => 'Não'], $usuarios->ativo, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
                                    <input type="hidden" name="ativo" value="{{ $usuarios->ativo }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">                        
                            {{-- Botão de Voltar --}}          
                            <a class="btn btn-danger" href="{{ route('home')}}">Cancelar</a>

                            {{-- Botão de Enviar --}}  
                            {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary pull-right']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
