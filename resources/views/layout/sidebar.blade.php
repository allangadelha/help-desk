<!-- Menu lateral -->
<div id="nav-col">
    <section id="col-left" class="col-left-nano">
        <div id="col-left-inner" class="col-left-nano-content">
            <div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
                <i class="fa fa-user fa-4x"></i>
                <div class="user-box">
                    <span class="name">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ auth()->user()->name }}
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="user-profile.html"><i class="fa fa-user"></i>Meu perfil</a></li>
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
                    @if(Gate::check('administrador') || Gate::check('atendente'))
                    <li class="<?php if(urlAtual() == url('/home')) echo 'active'; ?>">
                        <a href="/home">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                            <!--<span class="label label-primary label-circle pull-right">28</span>-->
                        </a>
                    </li>
                    @endif
                    
                    <li class="<?php if(urlAtual() == url('chamados/index') || urlAtual() == url('chamados/emaberto') || urlAtual() == url('chamados/ematendimento') || urlAtual() == url('chamados/atendidos') || urlAtual() == url('chamados/create')) echo 'active'; ?>">
                        
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-comment"></i>
                            <span>Chamados</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        
                        <ul class="submenu">
                            @if(Gate::check('administrador') || Gate::check('atendente'))
                            <li>
                                <a href="{{ url('/chamados/index') }}" class="<?php if(urlAtual() == url('chamados/index')) echo 'active'; ?>">
                                    <i class="fa fa-reorder purple"></i>
                                    Listar todos
                                </a>
                            </li>
                            @endif
                            
                            @if(Gate::check('administrador') || Gate::check('atendente'))
                            <li>
                                <a href="{{ url('/chamados/emaberto') }}" class="<?php if(urlAtual() == url('chamados/emaberto')) echo 'active'; ?>">
                                    <i class="fa fa-warning fa-fw fa-lg yellow"></i>
                                    Em aberto
                                </a>
                            </li>
                            @endif
                            
                            @if(Gate::check('administrador') || Gate::check('atendente'))                           
                            <li>
                                <a href="{{ url('/chamados/ematendimento') }}" class="<?php if(urlAtual() == url('chamados/ematendimento')) echo 'active'; ?>">
                                    <i class="fa fa-info-circle fa-fw fa-lg" style="color: #2980b9"></i>
                                    Em atendimento
                                </a>
                            </li>
                            @endif
                            
                            @if(Gate::check('administrador') || Gate::check('atendente'))
                            <li>
                                <a href="{{ url('/chamados/atendidos') }}" class="<?php if(urlAtual() == url('chamados/atendidos')) echo 'active'; ?>">
                                    <i class="fa fa-check-circle fa-fw fa-lg green"></i>
                                    Atendidos
                                </a>
                            </li>
                            @endif
                            
                            <li>
                                <a href="{{ url('/chamados/meuschamados') }}" class="<?php if(urlAtual() == url('chamados/meuschamados')) echo 'active'; ?>">
                                    <i class="fa fa-list fa-fw fa-lg" style="color: #2980b9"></i>
                                    Meus chamados
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{ url('/chamados/create') }}" class="<?php if(urlAtual() == url('chamados/create')) echo 'active'; ?>">
                                    <i class="fa fa-pencil fa-fw fa-lg red"></i>
                                    Cadastrar
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    @if(Gate::check('administrador') || Gate::check('atendente'))
                    <li class="<?php if(urlAtual() == url('clientes/index') || urlAtual() == url('clientes/create')) echo 'active'; ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-users"></i>
                            <span>Clientes</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                
                                <a href="{{ url('/clientes/index') }}" class="<?php if(urlAtual() == url('clientes/index')) echo 'active'; ?>">
                                    <i class="fa fa-users green"></i>
                                    <i class="glyphicon glyphicon-list green"></i>
                                    Listar
                                </a>
                            </li>                            
                        </ul>
                    </li>
                    @endif
                    
                    @if(Gate::check('administrador'))
                    <li class="<?php if(urlAtual() == url('atendentes/index') || urlAtual() == url('atendentes/create')) echo 'active'; ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-headphones"></i>
                            <span>Atendentes</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('/atendentes/index') }}" class="<?php if(urlAtual() == url('atendentes/index')) echo 'active'; ?>">
                                    <i class="fa fa-headphones green"></i>
                                    <i class="glyphicon glyphicon-list green"></i>
                                    Listar
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    
                    @if(Gate::check('administrador'))                    
                    <li class="<?php if(urlAtual() == url('setoresClientes/index') || urlAtual() == url('setoresClientes/create')) echo 'active'; ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-institution"></i>
                            <span>Setores</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('/setoresClientes/index') }}" class="<?php if(urlAtual() == url('setoresClientes/index')) echo 'active'; ?>">
                                    <i class="fa fa-institution green"></i>
                                    <i class="glyphicon glyphicon-list green"></i>
                                    Listar
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/setoresClientes/create') }}" class="<?php if(urlAtual() == url('setoresClientes/create')) echo 'active'; ?>">
                                    <i class="fa fa-institution" style="color: #2980b9"></i>
                                    <i class="fa fa-plus-square" style="color: #2980b9"></i>
                                    Cadastrar
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    
                    @if(Gate::check('administrador'))                    
                    <li class="<?php if(urlAtual() == url('status/index') || urlAtual() == url('status/create')) echo 'active'; ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-clock-o"></i>
                            <span>Status</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('/status/index') }}" class="<?php if(urlAtual() == url('status/index')) echo 'active'; ?>">
                                    <i class="fa fa-clock-o green"></i>
                                    <i class="glyphicon glyphicon-list green"></i>
                                    Listar
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/status/create') }}" class="<?php if(urlAtual() == url('status/create')) echo 'active'; ?>">
                                    <i class="fa fa-clock-o" style="color: #2980b9"></i>
                                    <i class="fa fa-plus-square" style="color: #2980b9"></i>
                                    Cadastrar
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    
                    @if(Gate::check('administrador'))                    
                    <li class="<?php if(urlAtual() == url('prioridade/index') || urlAtual() == url('prioridade/create')) echo 'active'; ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-star"></i>
                            <span>Prioridades</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('/prioridade/index') }}" class="<?php if(urlAtual() == url('prioridade/index')) echo 'active'; ?>">
                                    <i class="fa fa-star green"></i>
                                    <i class="glyphicon glyphicon-list green"></i>
                                    Listar
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/prioridade/create') }}" class="<?php if(urlAtual() == url('prioridade/create')) echo 'active'; ?>">
                                    <i class="fa fa-star" style="color: #2980b9"></i>
                                    <i class="fa fa-plus-square" style="color: #2980b9"></i>
                                    Cadastrar
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    
                    @if(Gate::check('administrador'))
                    <li class="<?php if(urlAtual() == url('tiposUsuarios/index') || urlAtual() == url('tiposUsuarios/create')) echo 'active'; ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-user"></i>
                            <span>Tipo de Usuário</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('/tiposUsuarios/index') }}" class="<?php if(urlAtual() == url('tiposUsuarios/index')) echo 'active'; ?>">
                                    <i class="fa fa-user green"></i>
                                    <i class="glyphicon glyphicon-list green"></i>
                                    Listar
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/tiposUsuarios/create') }}" class="<?php if(urlAtual() == url('tiposUsuarios/create')) echo 'active'; ?>">
                                    <i class="fa fa-user" style="color: #2980b9"></i>
                                    <i class="fa fa-plus-square" style="color: #2980b9"></i>
                                    Cadastrar
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    
                    @if(Gate::check('administrador'))
                    <li class="<?php if(urlAtual() == url('usuarios/index') || urlAtual() == url('usuarios/create')) echo 'active'; ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-user-md"></i>
                            <span>Usuários</span>
                            <i class="fa fa-angle-right drop-icon"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('/usuarios/index') }}" class="<?php if(urlAtual() == url('usuarios/index')) echo 'active'; ?>">
                                    <i class="fa fa-user-md green"></i>
                                    <i class="glyphicon glyphicon-list green"></i>
                                    Listar
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </section>
    <div id="nav-col-submenu"></div>
</div>