@extends('layout.home')

@section('title')
@endsection

@section('content')

<div class="col-xs-12">
    <header id="login-header">
        <div id="login-logo">
            <img src="img/logo.png" alt=""/>
        </div>
    </header>
    <div id="login-box-inner">
        <form role="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Endereço de e-mail" required autofocus>                
            </div>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert" style="text-align: center; color: red">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Senha" required>                
            </div>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert" style="text-align: center; color: red">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            
            <div id="remember-me-wrapper">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="checkbox-nice">
                            <input type="checkbox" id="remember-me" checked="checked"/>
                            <label for="remember-me">
                                Lembrar-me
                            </label>
                        </div>
                    </div>
                    <a href="forgot-password.html" id="login-forget-link" class="col-xs-6">
                        Esqueceu a senha?
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-success col-xs-12">Entrar</button>
                </div>
            </div>            
        </form>
    </div>
</div>

<div id="login-box-footer">
    <div class="row">
        <div class="col-xs-12">
            Não possui uma conta?
            <a href="{{ route('register') }}">
                Registre-se
            </a>
        </div>
    </div>
</div>

@endsection
