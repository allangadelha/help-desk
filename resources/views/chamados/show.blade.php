@extends('layout.template')
@section('title')
Detalhes do Setor
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('setoresClientes.index') }}">Setores</a></li>
                    <li class="active"><span>Detalhes do setor</span></li>
                </ol>
                <h1>Detalhes do Setor</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">                
                <div class="main-box clearfix">
                    <header class="main-box-header clearfix">
                    </header>
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Nome:                                        
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {{ $setorCliente->setor }}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            Clientes do setor {{ $setorCliente->setor }}                                       
                                    </h4>
                                </div>
                                <div id="" class="panel-collapse collapse in" style="">
                                    <div class="panel-body">
                                        {{ $setorCliente->setor }}<br><br><br><br><br>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
