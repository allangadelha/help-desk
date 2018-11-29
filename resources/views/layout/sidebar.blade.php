<!-- Menu lateral -->
<div id="nav-col">
    <section id="col-left" class="col-left-nano">
        <div id="col-left-inner" class="col-left-nano-content">
            <div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
                <img alt="" src="{{ asset('img/samples/scarlet-159.png') }}"/>
                <div class="user-box">
                    <span class="name">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Scarlett J.
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="user-profile.html"><i class="fa fa-user"></i>Meu perfil</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>Configurações</a></li>
                            <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-power-off"></i>Sair</a></li>
                        </ul>
                    </span>
                </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
                <ul class="nav nav-pills nav-stacked">
                    <li class="nav-header nav-header-first hidden-sm hidden-xs">
                        Navegação
                    </li>
                    <li class="active">
                        <a href="/">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                            <!--<span class="label label-primary label-circle pull-right">28</span>-->
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Chamados</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="tables.html">
                                    <i class="fa fa-warning fa-fw fa-lg yellow"></i>
                                    Em aberto
                                </a>
                            </li>
                            <li>
                                <a href="tables-advanced.html">
                                    <i class="fa fa-info-circle fa-fw fa-lg" style="color: #2980b9"></i>
                                    Em atendimento
                                </a>
                            </li>
                            <li>
                                <a href="users.html">
                                    <i class="fa fa-check-circle fa-fw fa-lg green"></i>
                                    Atendidos
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-users"></i>
                            <span>Clientes</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                
                                <a href="email-inbox.html">
                                    <i class="fa fa-users green"></i>
                                    <i class="glyphicon glyphicon-list green"></i>
                                    Listar
                                </a>
                            </li>
                            <li>
                                <a href="email-detail.html">
                                    <i class="glyphicon glyphicon-user" style="color: #2980b9"></i>
                                    <i class="fa fa-plus-square" style="color: #2980b9"></i>
                                    Cadastrar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-headphones"></i>
                            <span>Atendentes</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="graphs-morris.html">
                                    <i class="fa fa-headphones green"></i>
                                    <i class="glyphicon glyphicon-list green"></i>
                                    Listar
                                </a>
                            </li>
                            <li>
                                <a href="graphs-flot.html">
                                    <i class="fa fa-headphones" style="color: #2980b9"></i>
                                    <i class="fa fa-plus-square" style="color: #2980b9"></i>
                                    Cadastrar
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-institution"></i>
                            <span>Setores</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('/setoresClientes/index') }}">
                                    <i class="fa fa-institution green"></i>
                                    <i class="glyphicon glyphicon-list green"></i>
                                    Listar
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/setoresClientes/create') }}">
                                    <i class="fa fa-institution" style="color: #2980b9"></i>
                                    <i class="fa fa-plus-square" style="color: #2980b9"></i>
                                    Cadastrar
                                </a>
                            </li>
                        </ul>
                    </li>
<!--                    <li>
                        <a href="widgets.html">
                            <i class="fa fa-th-large"></i>
                            <span>Widgets</span>
                            <span class="label label-success pull-right">New</span>
                        </a>
                    </li>                    -->
                </ul>
            </div>
        </div>
    </section>
    <div id="nav-col-submenu"></div>
</div>