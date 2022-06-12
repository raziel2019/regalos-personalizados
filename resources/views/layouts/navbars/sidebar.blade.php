<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="mt-3" style="display: flex;" href="{{ route('home') }}">
            <img src="{{ asset('cuadros/logo.png') }}" class="navbar-brand-img" alt="...">
            <h5 class="text-center mt-2 ml-2 texto-logo">   Regalos Personalizados <br>Cancun</h5>
        </a>
    
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                @role('Dios|Administrador|Empleado|Usuario')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tienda">
                        <i class="ni ni-palette text-blue"></i> {{ __('Tienda') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/compras">
                        <i class="ni ni-palette text-blue"></i> {{ __('Compras') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto">
                        <i class="ni ni-palette text-blue"></i> {{ __('Contacto') }}
                    </a>
                </li>
               
                @endrole
                @role('Dios|Administrador|Empleado')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('costoZona') }}">
                        <i class="ni ni-palette text-blue"></i> {{ __('Zonas de envio') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('smza') }}">
                        <i class="ni ni-palette text-blue"></i> {{ __('Smza') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('direccionVentas') }}">
                        <i class="ni ni-palette text-blue"></i> {{ __('Direcciones Ventas') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('productos') }}">
                        <i class="ni ni-bag-17 text-blue"></i> {{ __('Productos') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ventas') }}">
                        <i class="ni ni-bag-17 text-blue"></i> {{ __('Ventas') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('materiales') }}">
                        <i class="ni ni-palette text-blue"></i> {{ __('Materiales') }}
                    </a>
                </li>
                @endrole
                @role('Administrador|Dios')               

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarios') }}">
                        <i class="ni ni-circle-08 text-blue"></i> {{ __('Usuarios') }}
                    </a>
                </li>
               
                @endrole
                @role('Dios')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('icons') }}">
                        <i class="ni ni-planet text-blue"></i> {{ __('Icons') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('table') }}">
                      <i class="ni ni-bullet-list-67 text-default"></i>
                      <span class="nav-link-text">Tables</span>
                    </a>
                </li>
                @endrole
            </ul>

        </div>
    </div>
</nav>
