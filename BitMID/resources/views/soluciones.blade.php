
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
                <li><a href="#contacto">Contacto</a></li>
            </ul>

            <div class="boton-login">
               <a href="{{ route('login') }}">Iniciar Sesión</a>
                <a href="/registro" class="btn-registro">Registrarse</a>
            </div>

        </nav>
    </header>

    <section
    class="hero"
    id="inicio"
    style="
        position: relative;
        width: 100%;
        height: 450px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background: #172033;
    "
>

    <video
        autoplay
        muted
        loop
        playsinline
        style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            z-index: 0;
        "
    >
        <source src="{{ asset('images/soluciones_bitmid.mp4') }}" type="video/mp4">
        Tu navegador no puede reproducir este video.
    </video>

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

<section class="nosotros" id="software">

    <div class="nosotros-contenido">

        <div class="nosotros-imagen">
            <img src="{{ asset('images/software.jpg') }}" alt="Desarrollo de software">
        </div>

        <div class="nosotros-info">

            <span class="etiqueta">
                Desarrollo de software
            </span>

            <h2>
                Programas a la medida de tu empresa
            </h2>

            <p>
                Creamos soluciones de software personalizadas para optimizar los procesos de tu empresa, mejorando la eficiencia y productividad.
            </p>

        </div>

    </div>

</section>

<section class="servicios" id="soporte">

    <div class="nosotros-contenido">

        

        <div class="nosotros-info">

            <span class="sub-servicios">
                Soluciones web
            </span>

            <h2>
                Sitios web y aplicaciones web para tu negocio
            </h2>

            <p>
                Diseñamos y desarrollamos sitios web y aplicaciones web modernas, rápidas y adaptables a las necesidades de tu negocio.
            </p>

        </div>

        <div class="nosotros-imagen">
            <img src="{{ asset('images/web.jpg') }}" alt="Soluciones web">
        </div>

    </div>

</section>

<section class="servicios" id="soporte">

    <div class="nosotros-contenido">

        <div class="nosotros-imagen">
            <img src="{{ asset('images/soporte.jpg') }}" alt="Soporte tecnológico">
        </div>

        <div class="nosotros-info">

            <span class="sub-servicios">
                Soporte tecnológico
            </span>

            <h2>
                Soporte tecnológico para tu empresa
            </h2>

            <p>
                Ofrecemos mantenimiento y soporte técnico para garantizar el correcto funcionamiento de tus sistemas y aplicaciones.
            </p>

        </div>

        

    </div>

</section>

<section class="nosotros" id="ciberseguridad">

    <div class="nosotros-contenido">

       

        <div class="nosotros-info">

            <span class="etiqueta">
                Ciberseguridad
            </span>

            <h2>
                Protección de tus datos y sistemas
            </h2>

            <p>
                Implementamos estrategias de ciberseguridad para proteger tus datos y sistemas contra amenazas y ataques.
            </p>

        </div>

         <div class="nosotros-imagen">
            <img src="{{ asset('images/ciberseguridad.jpg') }}" alt="Ciberseguridad">
        </div>

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