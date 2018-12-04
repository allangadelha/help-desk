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

                        {!! Form::model($usuarios, ['route' => ['usuarios.updatePassword', $usuarios->id], 'method' => 'put']) !!}
                        <div class="form-group">
                            <div class="row">                            
                                <div class="col-lg-6 col-sm-6 col-xl-6">
                                    {!! Form::label('password', 'Nova Senha:') !!}
                                    <input type="password" name="password" class="form-control" value="">

                                </div>

                                <div class="col-lg-6 col-sm-6 col-xl-6">
                                    {!! Form::label('password', 'Confirmar Nova Senha:') !!}
                                    {!! Form::password("password_confirmation", ['class' => 'form-control password']) !!}
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
