<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #0a1f44;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center gap-3" href="{{ route('pagina.inicio') }}">
            <img src="{{ asset('/images/logo.png') }}" alt="New Rubber" style="height: 56px; width: auto;">
            <span style="font-family: 'Orbitron', sans-serif; color: #d0ba7e; font-size: 30px;"><strong>New Rubber</strong></span>
        </a>

        <!-- Botón hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Enlaces de navegación -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center gap-3">
                <li class="nav-item">
                    <x-nav-link :href="route('pagina.inicio')" :active="request()->routeIs('pagina.inicio')" class="nav-link text-white" style="font-size: 20px;">
                       <strong>Inicio</strong> 
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="route('servicios.index')" :active="request()->routeIs('servicios.*')" class="nav-link text-white" style="font-size: 20px;">
                        Servicios
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="route('pagina.quienes')" :active="request()->routeIs('pagina.quienes')" class="nav-link text-white" style="font-size: 20px;">
                        Quienes somos
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="route('proyectos.index')" :active="request()->routeIs('proyectos.*')" class="nav-link text-white" style="font-size: 20px;">
                        Proyectos
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="route('contacto.index')" :active="request()->routeIs('contacto.index')" class="nav-link text-white" style="font-size: 20px;">
                        Contacto
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="route('cotizar.index')" :active="request()->routeIs('cotizar.index')" class="nav-link text-white" style="font-size: 20px;">
                        Probar cotizaciones
                    </x-nav-link>
                </li>
                
            </ul>
             <!-- Botón de login a la derecha -->
             <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item">
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')" class="btn border border-warning text-warning" style="font-size: 20px;">
                            Login
                        </x-nav-link>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn border border-warning text-warning" style="font-size: 20px;">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
            
        </div>
    </div>
</nav>