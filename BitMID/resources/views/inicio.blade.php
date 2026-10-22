
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa TI</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    <header>
        <nav class="navbar">

            <div class="container-fluid">
                <a class="navbar-brand" href="#inicio" aria-label="BitMID, ir al inicio">
                    <img src="{{ asset('images/BITMID2.png') }}" alt="Logo de BitMID">
                    <h2>BitMID</h2>
                </a>
            </div>

            <ul class="menu">
                <li><a href="#soluciones">Soluciones</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>

            <div class="boton-login">
                <a href="#">Iniciar Sesión</a>
            </div>

        </nav>
    </header>

    <section class="hero">
        <div class="hero-contenido">

            <h1>
                Soluciones tecnológicas
                <br>
                que conectan tu empresa
            </h1>

            <p>
                Gestiona ventas, clientes, inventario y proyectos
                desde un solo panel inteligente.
            </p>

        </div>

    </section>

    <section class="nosotros" id="nosotros">

        <div class="nosotros-contenido">

            <p class="etiqueta">NOSOTROS</p>

            <h2>
                Somos una empresa de TI
                <br>
                100% yucateca.
            </h2>

            <p class="descripcion">
                Brindamos soluciones tecnológicas a la medida de las
                necesidades de cada empresa, ayudándolas a mejorar
                sus procesos y aprovechar al máximo la tecnología.
            </p>

        </div>

    </section>

    <section class="servicios" id="servicios">

        <div class="servicios-contenido">

            <p class="etiqueta">SERVICIOS</p>

            <h2>Nuestras soluciones</h2>

            <p class="subtitulo">
                Tecnología pensada para las necesidades de tu empresa.
            </p>

            <div class="tarjetas">

                @foreach($servicios as $servicio)

                    <div class="tarjeta">

                        <div class="icono">
                            {{ $servicio['icono'] }}
                        </div>

                        <h3>
                            {{ $servicio['nombre'] }}
                        </h3>

                        <p>
                            {{ $servicio['descripcion'] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    <section class="contacto" id="contacto">

        <div class="contacto-contenido">

            <p class="etiqueta">CONTACTO</p>

            <h2>¿Tienes un proyecto en mente?</h2>

            <p class="subtitulo">
                Cuéntanos sobre tu proyecto y nos pondremos en contacto contigo.
            </p>

            <form class="formulario">

                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input 
                        type="text" 
                        id="nombre" 
                        name="nombre"
                        placeholder="Escribe tu nombre"
                    >
                </div>

                <div class="campo">
                    <label for="correo">Correo electrónico</label>
                    <input 
                        type="email" 
                        id="correo" 
                        name="correo"
                        placeholder="ejemplo@correo.com"
                    >
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea 
                        id="mensaje" 
                        name="mensaje"
                        placeholder="Cuéntanos sobre tu proyecto"
                        rows="5"
                    ></textarea>
                </div>
                
                <div class="g-recaptcha campo" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>

                @error('captcha')
                    <span class="text-danger" style="color: red; font-size: 0.9em;">{{ $message }}</span>
                @enderror

                <button type="submit">
                    Enviar mensaje
                </button>

            </form>

        </div>

    </section>

<footer class="footer">

    <div class="footer-contenido">

        <div class="footer-empresa">

            <h2>BITMID</h2>

            <p>
                Soluciones tecnológicas
                para tu empresa.
            </p>

        </div>

        <div class="footer-enlaces">

            <h3>Navegación</h3>

            <a href="#">Inicio</a>

            <a href="#servicios">Servicios</a>

            <a href="#nosotros">Nosotros</a>

            <a href="#contacto">Contacto</a>

        </div>

        <div class="footer-contacto">

            <h3>Contacto</h3>

            <p>contacto@bitmid.com</p>

            <p>Mérida, Yucatán</p>

        </div>

    </div>

    <div class="footer-inferior">

        <p>
            © 2026 BITMID. Todos los derechos reservados.
        </p>

    </div>

</footer>

</body>
</html>