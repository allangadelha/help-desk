@extends('layout.template')

@section('title')
Usuários
@endsection

@section('content')

<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div id="content-header" class="clearfix">
                <div class="pull-left">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active"><span>Dashboard</span></li>
                    </ol>
                    <h1>Dashboard</h1>
                </div>
                <div class="pull-right hidden-xs">
                    <div class="xs-graph pull-left">
                        <div class="graph-label">
                            <b><i class="fa fa-shopping-cart"></i> 838</b> Orders
                        </div>
                        <div class="graph-content spark-orders"></div>
                    </div>
                    <div class="xs-graph pull-left mrg-l-lg mrg-r-sm">
                        <div class="graph-label">
                            <b>&dollar;12.338</b> Revenues
                        </div>
                        <div class="graph-content spark-revenues"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="main-box infographic-box colored emerald-bg">
                <i class="fa fa-envelope"></i>
                <span class="headline">Messages</span>
                <span class="value">4.658</span>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="main-box infographic-box colored green-bg">
                <i class="fa fa-money"></i>
                <span class="headline">Orders</span>
                <span class="value">22.631</span>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="main-box infographic-box colored red-bg">
                <i class="fa fa-user"></i>
                <span class="headline">Users</span>
                <span class="value">92.421</span>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="main-box infographic-box colored purple-bg">
                <i class="fa fa-globe"></i>
                <span class="headline">Visits</span>
                <span class="value">13.298</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-box">
                <header class="main-box-header clearfix">
                    <h2 class="pull-left">Sales &amp; Earnings</h2>
                </header>
                <div class="main-box-body clearfix">
                    <div class="row">
                        <div class="col-md-9">
                            <div id="graph-bar" style="height: 240px; padding: 0px; position: relative;"></div>
                        </div>
                        <div class="col-md-3">
                            <ul class="graph-stats">
                                <li>
                                    <div class="clearfix">
                                        <div class="title pull-left">
                                            Earnings
                                        </div>
                                        <div class="value pull-right" title="10% down" data-toggle="tooltip">
                                            &dollar;94.382 <i class="fa fa-level-down red"></i>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div style="width: 69%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="69" role="progressbar" class="progress-bar">
                                            <span class="sr-only">69% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="clearfix">
                                        <div class="title pull-left">
                                            Orders
                                        </div>
                                        <div class="value pull-right" title="24% up" data-toggle="tooltip">
                                            3.930 <i class="fa fa-level-up green"></i>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div style="width: 42%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="42" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">42% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="clearfix">
                                        <div class="title pull-left">
                                            New Clients
                                        </div>
                                        <div class="value pull-right" title="8% up" data-toggle="tooltip">
                                            894 <i class="fa fa-level-up green"></i>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div style="width: 78%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="78" role="progressbar" class="progress-bar progress-bar-success">
                                            <span class="sr-only">78% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="clearfix">
                                        <div class="title pull-left">
                                            Visitors
                                        </div>
                                        <div class="value pull-right" title="17% down" data-toggle="tooltip">
                                            824.418 <i class="fa fa-level-down red"></i>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div style="width: 94%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="94" role="progressbar" class="progress-bar progress-bar-warning">
                                            <span class="sr-only">94% Complete</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                                        &dollar; 825.50
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
                                        &dollar; 923.93
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
                                        &dollar; 1.625.50
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
                                        &dollar; 35.34
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
                                        &dollar; 34.199.99
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
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="main-box feed">
                <header class="main-box-header clearfix">
                    <h2 class="pull-left">Project feed</h2>
                </header>
                <div class="main-box-body clearfix">
                    <ul>
                        <li class="clearfix">
                            <div class="img">
                                <img src="img/samples/robert-300.jpg" alt=""/>
                            </div>
                            <div class="title">
                                <a href="#">Robert Downey Jr.</a> took photo with Instagram.
                            </div>
                            <div class="post-time">
                                Today 5:22 pm
                            </div>
                            <div class="time-ago">
                                <i class="fa fa-clock-o"></i> 5 min.
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="img">
                                <img src="img/samples/lima-300.jpg" alt=""/>
                            </div>
                            <div class="title">
                                <a href="#">Adriana Lima</a> checked in at Las Vegas Oscars
                            </div>
                            <div class="post-time">
                                Yesterday 11:38 am
                            </div>
                            <div class="photos clearfix">
                                <div class="item">
                                    <a href="#">
                                        <img src="img/samples/robert-300.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="img/samples/emma-300.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="img/samples/scarlett-300.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="time-ago">
                                <i class="fa fa-clock-o"></i> 9 hours.
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="img">
                                <img src="img/samples/emma-300.jpg" alt=""/>
                            </div>
                            <div class="title">
                                <a href="#">Emma Watson</a> commented on Scarlett Johansson's video.
                            </div>
                            <div class="post-time">
                                Today 11:59 pm
                            </div>
                            <div class="time-ago">
                                <i class="fa fa-clock-o"></i> 28 min.
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="img">
                                <img src="img/samples/ryan-300.jpg" alt=""/>
                            </div>
                            <div class="title">
                                <a href="#">Ryan Gosling</a> likes Ryan Gosling's link on his own Timeline.
                            </div>
                            <div class="post-time">
                                Yesterday 9:43 pm
                            </div>
                            <div class="photos clearfix">
                                <div class="item">
                                    <a href="#">
                                        <img src="img/samples/scarlett-300.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="img/samples/robert-300.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="img/samples/emma-300.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="time-ago">
                                <i class="fa fa-clock-o"></i> 5 hours.
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="img">
                                <img src="img/samples/kunis-300.jpg" alt=""/>
                            </div>
                            <div class="title">
                                <a href="#">Mila Kunis</a> invited you to his birthday party at her mansion.
                            </div>
                            <div class="post-time">
                                Yesterday 7:50 am
                            </div>
                            <div class="time-ago">
                                <i class="fa fa-clock-o"></i> 9 hours.
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="img">
                                <img src="img/samples/emma-300.jpg" alt=""/>
                            </div>
                            <div class="title">
                                <a href="#">Emma Watson</a> commented on Scarlett Johansson's video.
                            </div>
                            <div class="post-time">
                                Today 11:59 pm
                            </div>
                            <div class="time-ago">
                                <i class="fa fa-clock-o"></i> 28 min.
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="img">
                                <img src="img/samples/lima-300.jpg" alt=""/>
                            </div>
                            <div class="title">
                                <a href="#">Adriana Lima</a> checked in at Las Vegas Oscars
                            </div>
                            <div class="post-time">
                                Yesterday 11:38 am
                            </div>
                            <div class="photos clearfix">
                                <div class="item">
                                    <a href="#">
                                        <img src="img/samples/robert-300.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="img/samples/emma-300.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="img/samples/scarlett-300.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="time-ago">
                                <i class="fa fa-clock-o"></i> 9 hours.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="main-box clearfix">
                <header class="main-box-header clearfix">
                    <h2>Todo</h2>
                </header>
                <div class="main-box-body clearfix">
                    <ul class="widget-todo">
                        <li class="clearfix">
                            <div class="name">
                                <div class="checkbox-nice">
                                    <input type="checkbox" id="todo-1"/>
                                    <label for="todo-1">
                                        New products introduction <span class="label label-danger">High Priority</span>
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="name">
                                <div class="checkbox-nice">
                                    <input type="checkbox" id="todo-2"/>
                                    <label for="todo-2">
                                        Checking the stock <span class="label label-success">Low Priority</span>
                                    </label>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#" class="table-link">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="#" class="table-link danger">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="name">
                                <div class="checkbox-nice">
                                    <input type="checkbox" id="todo-3" checked="checked"/>
                                    <label for="todo-3">
                                        Buying coffee <span class="label label-warning">Medium Priority</span>
                                    </label>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#" class="table-link">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="#" class="table-link danger">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="name">
                                <div class="checkbox-nice">
                                    <input type="checkbox" id="todo-4"/>
                                    <label for="todo-4">
                                        New marketing campaign <span class="label label-success">Low Priority</span>
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="name">
                                <div class="checkbox-nice">
                                    <input type="checkbox" id="todo-5"/>
                                    <label for="todo-5">
                                        Calling Mom <span class="label label-warning">Medium Priority</span>
                                    </label>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#" class="table-link badge">
                                    <i class="fa fa-cog"></i>
                                </a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="name">
                                <div class="checkbox-nice">
                                    <input type="checkbox" id="todo-6"/>
                                    <label for="todo-6">
                                        Ryan's birthday <span class="label label-danger">High Priority</span>
                                    </label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="main-box weather-box">
                <header class="main-box-header clearfix">
                    <h2 class="pull-left">Weather now</h2>
                </header>
                <div class="main-box-body clearfix">
                    <div class="current">
                        <div class="clearfix center-block" style="width: 220px;">
                            <canvas class="icon" id="current-weather" width="100" height="100"></canvas>
                            <div class="temp-wrapper">
                                <div class="temperature">
                                    -10<span class="sign">°</span>
                                </div>
                                <div class="desc">
                                    <i class="fa fa-map-marker"></i> New York
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next">
                        <ul class="clearfix">
                            <li>
                                <div class="day">
                                    MON
                                </div>
                                <div class="icon" title="Hot" data-toggle="tooltip">
                                    <i class="wi wi-hot"></i>
                                </div>
                                <div class="temperature">
                                    45<span class="sign">°</span>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    TUE
                                </div>
                                <div class="icon" title="Showers" data-toggle="tooltip">
                                    <i class="wi wi-day-showers"></i>
                                </div>
                                <div class="temperature">
                                    28<span class="sign">°</span>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    WED
                                </div>
                                <div class="icon" title="Cloudy" data-toggle="tooltip">
                                    <i class="wi wi-cloudy-windy"></i>
                                </div>
                                <div class="temperature">
                                    16<span class="sign">°</span>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    THU
                                </div>
                                <div class="icon" title="Thunderstom" data-toggle="tooltip">
                                    <i class="wi wi-thunderstorm"></i>
                                </div>
                                <div class="temperature">
                                    18<span class="sign">°</span>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    FRI
                                </div>
                                <div class="icon" title="Lightning" data-toggle="tooltip">
                                    <i class="wi wi-night-alt-lightning"></i>
                                </div>
                                <div class="temperature">
                                    22<span class="sign">°</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="main-box">
                <header class="main-box-header clearfix">
                    <h2 class="pull-left">Visitors location</h2>
                    <div class="icon-box pull-right">
                        <a href="#" class="btn pull-left">
                            <i class="fa fa-refresh"></i>
                        </a>
                        <a href="#" class="btn pull-left">
                            <i class="fa fa-cog"></i>
                        </a>
                    </div>
                </header>
                <div class="main-box-body clearfix">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="map-stats">
                                <div class="table-responsive">
                                    <table class="table table-condensed table-hover">
                                        <thead>
                                            <tr>
                                                <th><span>Country</span></th>
                                                <th class="text-center"><span>Last Visit</span></th>
                                                <th class="text-center"><span>Status</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    USA
                                                </td>
                                                <td class="text-center">
                                                    2013/08/08
                                                </td>
                                                <td class="text-center status green">
                                                    <i class="fa fa-level-up"></i> 27%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Russia
                                                </td>
                                                <td class="text-center">
                                                    2013/08/08
                                                </td>
                                                <td class="text-center status red">
                                                    <i class="fa fa-level-down"></i> 43%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    China
                                                </td>
                                                <td class="text-center">
                                                    2013/08/08
                                                </td>
                                                <td class="text-center status green">
                                                    <i class="fa fa-level-up"></i> 18%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    India
                                                </td>
                                                <td class="text-center">
                                                    2013/08/08
                                                </td>
                                                <td class="text-center status green">
                                                    <i class="fa fa-level-up"></i> 63%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Australia
                                                </td>
                                                <td class="text-center">
                                                    2013/08/08
                                                </td>
                                                <td class="text-center status red">
                                                    <i class="fa fa-level-down"></i> 82%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Canada
                                                </td>
                                                <td class="text-center">
                                                    2013/08/08
                                                </td>
                                                <td class="text-center status red">
                                                    <i class="fa fa-level-down"></i> 11%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Argentina
                                                </td>
                                                <td class="text-center">
                                                    2013/08/08
                                                </td>
                                                <td class="text-center status green">
                                                    <i class="fa fa-level-up"></i> 74%
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div id="world-map" style="width: 100%; height: 400px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

Testando template

@endsection