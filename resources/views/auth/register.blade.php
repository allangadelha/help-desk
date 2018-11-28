@extends('layout.home')

@section('content')

<div class="col-xs-12">
    <header id="login-header">
        <div id="login-logo">
            <img src="img/logo.png" alt=""/>
        </div>
    </header>
    <div id="login-box-inner">
        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf
            
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nome completo" required autofocus>                                
            </div>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Endereço de e-mail" required>
            </div>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Senha" required>
            </div>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha" required>
                
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-success col-xs-12">Cadastrar</button>
                </div>
            </div>
            <input id="id_tipo_users" type="hidden" name="id_tipo_users" value="2" required>
            <input id="ativo" type="hidden" name="ativo" value="0" required>
        </form>
    </div>
</div>

<div id="login-box-footer">
    <div class="row">
        <div class="col-xs-12">
            <a href="{{ route('login') }}">
                Voltar para login
            </a>
        </div>
    </div>
</div>

@endsection
