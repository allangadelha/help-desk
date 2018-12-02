<!-- Menu superior -->
<header class="navbar" id="header-navbar">
    <div class="container">
        <a href="index-2.html" id="logo" class="navbar-brand">
            <img src="{{ asset('img/logo.png') }}" alt="" class="normal-logo logo-white"/>
            <img src="{{ asset('img/logo-black.png') }}" alt="" class="normal-logo logo-black"/>
            <img src="{{ asset('img/logo-small.png') }}" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
        </a>
        <div class="clearfix">
            <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                <ul class="nav navbar-nav pull-left">
                    <li>
                        <a class="btn" id="make-small-nav">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>                                  
                    
                </ul>
            </div>
            <div class="nav-no-collapse pull-right" id="header-nav">
                <ul class="nav navbar-nav pull-right">
                    <li class="mobile-search">
                        <a class="btn">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="drowdown-search">
                            <form role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Pesquisar...">
                                    <i class="fa fa-search nav-search-icon"></i>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown profile-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('img/samples/scarlet-159.png') }}" alt=""/>
                            <span class="hidden-xs">{{ Auth::user()->name }}</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="user-profile.html"><i class="fa fa-user"></i>Meu perfil</a></li>
                            <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-power-off"></i>Sair</a></li>
                        </ul>
                    </li>
                    <li class="hidden-xxs">
                        <a href="{{ url('/auth/logout') }}" class="btn">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>