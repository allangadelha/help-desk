@extends('layout.template')
    @section('title')
        Dashborad
    @endsection

@section('content')
<div class="row" style="opacity: 1;">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div id="content-header" class="clearfix">
                    <div class="pull-left">
                        <ol class="breadcrumb">
                            <li><a href="#">Início</a></li>
                            <li class="active"><span>Dashboard</span></li>
                        </ol>
                        <h1>Dashboard</h1>
                    </div>
                    <div class="pull-right hidden-xs">
                        <div class="xs-graph pull-left">
                            <div class="graph-label">
                                <b><i class="fa fa-reorder"></i> 838</b> Orders
                            </div>
                            <div class="graph-content spark-orders"><canvas width="125" height="25" style="display: inline-block; width: 125px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="main-box infographic-box colored emerald-bg">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="headline">Chamados</span>
                    <span class="value">4.658</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="main-box infographic-box colored green-bg">
                    <i class="fa fa-users"></i>
                    <span class="headline">Clientes</span>
                    <span class="value">22.631</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="main-box infographic-box colored red-bg">
                    <i class="fa fa-headphones"></i>
                    <span class="headline">Atendentes</span>
                    <span class="value">92.421</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="main-box infographic-box colored purple-bg">
                    <i class="fa fa-institution"></i>
                    <span class="headline">Setores</span>
                    <span class="value">{{ App\SetorCliente::all()->count() }}</span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box clearfix">
                    <header class="main-box-header clearfix">
                        <h2 class="pull-left">Last orders</h2>
                        <div class="filter-block pull-right">
                            <div class="form-group pull-left">
                                <input type="text" class="form-control" placeholder="Search...">
                                <i class="fa fa-search search-icon"></i>
                            </div>
                            <a href="#" class="btn btn-primary pull-right">
                                <i class="fa fa-eye fa-lg"></i> View all orders
                            </a>
                        </div>
                    </header>
                    <div class="main-box-body clearfix">
                        <div class="table-responsive clearfix">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><a href="#"><span>Order ID</span></a></th>
                                        <th><a href="#" class="desc"><span>Date</span></a></th>
                                        <th><a href="#" class="asc"><span>Customer</span></a></th>
                                        <th class="text-center"><span>Status</span></th>
                                        <th class="text-right"><span>Price</span></th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">#8002</a>
                                        </td>
                                        <td>
                                            2013/08/08
                                        </td>
                                        <td>
                                            <a href="#">Robert De Niro</a>
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-success">Completed</span>
                                        </td>
                                        <td class="text-right">
                                            $ 825.50
                                        </td>
                                        <td class="text-center" style="width: 15%;">
                                            <a href="#" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">#5832</a>
                                        </td>
                                        <td>
                                            2013/08/08
                                        </td>
                                        <td>
                                            <a href="#">John Wayne</a>
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-warning">On hold</span>
                                        </td>
                                        <td class="text-right">
                                            $ 923.93
                                        </td>
                                        <td class="text-center" style="width: 15%;">
                                            <a href="#" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">#2547</a>
                                        </td>
                                        <td>
                                            2013/08/08
                                        </td>
                                        <td>
                                            <a href="#">Anthony Hopkins</a>
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-info">Pending</span>
                                        </td>
                                        <td class="text-right">
                                            $ 1.625.50
                                        </td>
                                        <td class="text-center" style="width: 15%;">
                                            <a href="#" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">#9274</a>
                                        </td>
                                        <td>
                                            2013/08/08
                                        </td>
                                        <td>
                                            <a href="#">Charles Chaplin</a>
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-danger">Cancelled</span>
                                        </td>
                                        <td class="text-right">
                                            $ 35.34
                                        </td>
                                        <td class="text-center" style="width: 15%;">
                                            <a href="#" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">#8463</a>
                                        </td>
                                        <td>
                                            2013/08/08
                                        </td>
                                        <td>
                                            <a href="#">Gary Cooper</a>
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-success">Completed</span>
                                        </td>
                                        <td class="text-right">
                                            $ 34.199.99
                                        </td>
                                        <td class="text-center" style="width: 15%;">
                                            <a href="#" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
