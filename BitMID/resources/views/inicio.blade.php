
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa TI</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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

        <div class="nosotros-imagen">
            <img src="{{ asset('images/nosotros.png') }}" alt="Equipo BITMID">
        </div>

        <div class="nosotros-info">

            <span class="etiqueta">
                NOSOTROS
            </span>

            <h2>
                Somos una empresa de TI 100% yucateca.
            </h2>

            <p>
                Brindamos soluciones tecnológicas a la medida de las necesidades
                de cada empresa, ayudándolas a mejorar sus procesos y aprovechar
                al máximo la tecnología.
            </p>

        </div>

    </div>

</section>

    <section class="estadisticas">
     <div class="estadisticas-contenido">

        <div class="estadistica">
            <h2>+50</h2>
            <p>Proyectos completados</p>
        </div>

        <div class="estadistica">
            <h2>+30</h2>
            <p>Clientes satisfechos</p>
        </div>

        <div class="estadistica">
            <h2>24/7</h2>
            <p>Soporte técnico</p>
        </div>

        <div class="estadistica">
            <h2>99%</h2>
            <p>Disponibilidad</p>
        </div>

     </div>
    </section>
    <div class="transicion"></div>
    <section class="ventajas">

    <div class="ventajas-contenido">

        <p class="etiqueta">¿POR QUÉ ELEGIRNOS?</p>

        <h2>Impulsamos la transformación digital de tu empresa</h2>

        <div class="ventajas-grid">

            <div class="ventaja">
              <img src="{{ asset('images/imagen_soluciones.jpg') }}" alt="Soluciones a medida">       
                <h3>✅ Soluciones a medida</h3>
                    <p>
                        Diseñamos herramientas adaptadas a las necesidades
                        específicas de cada empresa.
                    </p>
                </div>

            <div class="ventaja">
              <img src="{{ asset('images/seguridad_imagen2.png') }}" alt="Seguridad de la información">
                <h3>✅ Seguridad de la información</h3>
                <p>
                    Protegemos los datos mediante buenas prácticas y
                    procedimientos confiables.
                </p>
            </div>

            <div class="ventaja">
             <img src="{{ asset('images/soporte_imagen.jpg') }}" alt="Soporte continuo">    
            <h3>✅ Soporte continuo</h3>
                <p>
                    Acompañamos a nuestros clientes antes, durante
                    y después de la implementación.
                </p>
            </div>

            <div class="ventaja">
             <img src="{{ asset('images/innovacion_imagen.jpg') }}" alt="Innovación tecnológica">
                <h3>✅ Innovación tecnológica</h3>
                <p>
                    Utilizamos herramientas modernas y escalables
                    para impulsar el crecimiento empresarial.
                </p>
            </div>

        </div>

    </div>

</section>
<div class="transicion-abajo"></div>
<section class="proceso">

    <div class="proceso-contenido">

        <p class="etiqueta">PROCESO DE TRABAJO</p>

        <h2>¿Cómo trabajamos?</h2>

        <p class="subtitulo">
            Acompañamos a nuestros clientes en cada etapa del proyecto para garantizar resultados efectivos.
        </p>

        <div class="pasos">

            <div class="paso">

                 <img class="paso-img" src="{{ asset('images/diagnostico_imagen.png') }}" alt="Diagnóstico">

                    <div class="numero">1</div>

                <h3>Diagnóstico</h3>
                <p>
                    Analizamos las necesidades y objetivos de la empresa
                    para identificar oportunidades de mejora.
                </p>
            </div>

            <div class="paso">
                    <img class="paso-img" src="{{ asset('images/uiux.png') }}" alt="Diseño">

                    <div class="numero">2</div>
                <h3>Diseño</h3>
                <p>
                    Diseñamos una solución tecnológica adaptada a los
                    requerimientos específicos del cliente.
                </p>
            </div>

            <div class="paso">
                    <img class="paso-img" src="{{ asset('images/implementacion.png') }}" alt="Implementacion">

                    <div class="numero">3</div>

                <h3>Implementación</h3>
                <p>
                    Desarrollamos e integramos la solución asegurando
                    un funcionamiento eficiente.
                </p>
            </div>

            <div class="paso">
                <img class="paso-img" src="{{ asset('images/soporte2.webp') }}" alt="Soporte">

                    <div class="numero">4</div>
                <h3>Soporte</h3>
                <p>
                    Brindamos acompañamiento continuo para garantizar
                    el correcto desempeño del sistema.
                </p>
            </div>

        </div>

    </div>

</section>
<div class="transicion"></div>
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
<div class="transicion-abajo"></div>
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

    <div class="footer-inferior">

        <p>
            © 2026 BITMID. Todos los derechos reservados.
        </p>

    </div>

</footer>

</body>
</html>