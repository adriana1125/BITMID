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
                <li><a href="{{ route('servicios') }}">Servicios</a></li>
                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
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


    <div class="nosotros-info ubicacion-info">

            <h1 class="sub-servicios">
                Ubicación
            </h1>

        

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1466.699522172578!2d-89.61356444132609!3d21.043895503644116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56773cf7fc08c3%3A0x7564912c3dde335e!2sTheSky!5e1!3m2!1ses-419!2smx!4v1795386569135!5m2!1ses-419!2smx" 
            title="Ubicación de BitMID"
            allowfullscreen
            loading="lazy" 
            referrerpolicy="strict-origin-when-cross-origin"></iframe>

            <br>
            <p style="text-color: white">
                <strong>Dirección:</strong> Torre TheSky piso 15, Tablaje Catastral 31579, Periférico Norte, Temozón Norte C.P. 97302, Mérida, Yucatán.</p>
            </div>
</section>

    <section class="contacto" id="contacto">

        <div class="contacto-contenido">

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

                <div
                    class="g-recaptcha campo"
                    data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                ></div>

                @error('captcha')
                    <span class="text-danger" style="color: red; font-size: 0.9em;">
                        {{ $message }}
                    </span>
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

                <a href="{{ route('inicio') }}">Inicio</a>
                <a href="{{ route('servicios') }}">Servicios</a>
                <a href="{{ route('nosotros') }}">Nosotros</a>
                <a href="{{ route('contacto') }}">Contacto</a>

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