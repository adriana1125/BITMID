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

    <!-- BARRA DE NAVEGACIÓN -->
    <header>
        <nav class="navbar">

            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('inicio') }}" aria-label="BitMID, ir al inicio">
                    <img src="{{ asset('images/BITMID2.png') }}" alt="Logo de BitMID">
                    <h2>BitMID</h2>
                </a>
            </div>

            <ul class="menu">
                <li><a href="{{ route('soluciones') }}">Soluciones</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>

            <div class="boton-login">
               <a href="{{ route('login') }}">Iniciar Sesión</a>
                <a href="/registro" class="btn-registro">Registrarse</a>
            </div>

        </nav>
    </header>

<section
    class="hero"
    id="inicio-contacto"
>

    <img 
        src="https://api.mapbox.com/styles/v1/a21203210/cmuwv72xm006k01rwf7wbglsu/static/pin-l+4682b4(-89.6125,21.04465)/-89.6332,20.953,11.93,0,45/1280x720@2x.png?attribution=false&logo=false&access_token=pk.eyJ1IjoiYTIxMjAzMjEwIiwiYSI6ImNtdXJteGE2aTAwMXUyd3B6MXY3bmJmZGoifQ.WeGbBhGLoSFhPIAswsqCMA" 
        alt="Imagen de contacto" 
        style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        ">

    <div
        class="hero-contenido"
        style="
            position: relative;
            z-index: 2;
            color: white;
            max-width: 900px;
            padding: 20px;
        "
    >

        <h1>
            Soluciones 
            <br>
            que ofrecemos
        </h1>

        <p>
            Gestion, infraestructura y desarrollo de software para tu empresa.
        </p>

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

                <a href="#inicio">Inicio</a>
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

            <div class="redes-sociales">
            <a href="#" target="_blank">
            <i class="fab fa-facebook-f"></i>
            </a>

            <a href="#" target="_blank">
            <i class="fab fa-instagram"></i>
            </a>

            <a href="#" target="_blank">
            <i class="fab fa-linkedin-in"></i>
            </a>

            <a href="#" target="_blank">
            <i class="fab fa-x-twitter"></i>
            </a>
        </div>

    </div>

            <p>
                © 2026 BITMID. Todos los derechos reservados.
            </p>

        </div>

    </footer>