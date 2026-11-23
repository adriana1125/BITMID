<header>
    <nav class="navbar">

        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio') }}" aria-label="BitMID, ir al inicio">
                <img src="{{ asset('images/BITMID2.png') }}" alt="Logo de BitMID">
                <h2>BitMID</h2>
            </a>
        </div>

        <ul class="menu">
            <li>
                <a href="{{ route('soluciones') }}">Soluciones</a>
            </li>

            <li>
                <a href="{{ route('servicios') }}">Servicios</a>
            </li>

            <li>
                <a href="{{ route('nosotros') }}">Nosotros</a>
            </li>

            <li>
                <a href="{{ route('contacto') }}">Contacto</a>
            </li>
        </ul>

        <div class="boton-login">

            @if(session()->has('usuario_demo'))

                <!-- Botón Perfil -->
                <a href="{{ route('perfil') }}">
                    Perfil
                </a>

                <!-- Botón Cerrar sesión -->
                <form action="{{ route('cerrar.sesion') }}" method="POST" style="display: inline;">
                    @csrf

                    <button type="submit" class="btn-registro btn-cerrar-sesion">
                        Cerrar sesión
                    </button>
                </form>

            @else

                <!-- Botones para visitantes -->
                <a href="{{ route('login') }}">
                    Iniciar Sesión
                </a>

                <a href="{{ route('registro') }}" class="btn-registro">
                    Registrarse
                </a>

            @endif

        </div>

    </nav>
</header>
