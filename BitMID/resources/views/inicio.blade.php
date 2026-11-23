    <x-header/>

   
    
<!-- INICIO CON VIDEO DE FONDO -->
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
        <source src="{{ asset('images/bitmid.mp4') }}" type="video/mp4">
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


    <!-- NOSOTROS -->
    <section class="nosotros" id="nosotros">

    <div class="nosotros-contenido">

        <div class="nosotros-imagen">
            <img src="{{ asset('images/nosotros.png') }}" alt="Equipo BITMID">
        </div>

        <div class="nosotros-info">

           <h2 class="etiqueta">
                Nosotros
           </h2>

            <p class="subtitulo-seccion">
                Somos una empresa de TI 100% yucateca.
            </p>

            <p class="descripcion">
                Brindamos soluciones tecnológicas a la medida de las necesidades
                de cada empresa, ayudándolas a mejorar sus procesos y aprovechar
                al máximo la tecnología.
            </p>
        </div>

    </div>

</section>

    <!-- ESTADÍSTICAS -->
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

    <!-- VENTAJAS -->
    <section class="ventajas">

        <div class="ventajas-contenido">

            <p class="sub-servicios">¿POR QUÉ ELEGIRNOS?</p>

            <h2>Impulsamos la transformación digital de tu empresa</h2>

            <div class="ventajas-grid">

                <div class="ventaja">
                    <h3>✅ Soluciones a medida</h3>
                    <p>
                        Diseñamos herramientas adaptadas a las necesidades
                        específicas de cada empresa.
                    </p>
                </div>

                <div class="ventaja">
                    <h3>✅ Seguridad de la información</h3>
                    <p>
                        Protegemos los datos mediante buenas prácticas y
                        procedimientos confiables.
                    </p>
                </div>

                <div class="ventaja">
                    <h3>✅ Soporte continuo</h3>
                    <p>
                        Acompañamos a nuestros clientes antes, durante
                        y después de la implementación.
                    </p>
                </div>

                <div class="ventaja">
                    <h3>✅ Innovación tecnológica</h3>
                    <p>
                        Utilizamos herramientas modernas y escalables
                        para impulsar el crecimiento empresarial.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <!-- PROCESO DE TRABAJO -->
<section class="proceso">

    <div class="proceso-contenido">

        <h2 class="etiqueta">PROCESO DE TRABAJO</h2>

        <p class="subtitulo-seccion">¿Cómo trabajamos?</p>

        <p class="subtitulo">
            Acompañamos a nuestros clientes en cada etapa del proyecto
            para garantizar resultados efectivos.
        </p>

        <div class="pasos">

            <!-- DIAGNÓSTICO -->
            <button type="button" class="paso paso-boton"
                data-titulo="Diagnóstico"
                data-descripcion="Analizamos las necesidades, objetivos y procesos actuales de tu empresa. Identificamos problemas, oportunidades de mejora y áreas donde la tecnología puede ayudarte a trabajar de manera más eficiente.">

                <img class="paso-img" src="{{ asset('images/diagnostico1.jpg') }}" alt="Diagnóstico">
                <div class="numero">1</div>
                <h3>Diagnóstico</h3>
                <p>
                    Analizamos las necesidades y objetivos de la empresa
                    para identificar oportunidades de mejora.
                </p>
            </button>

            <!-- DISEÑO -->
            <button type="button" class="paso paso-boton"
                data-titulo="Diseño"
                data-descripcion="A partir de los resultados del diagnóstico, definimos una propuesta tecnológica adaptada a las necesidades de tu empresa. Organizamos los requerimientos y planeamos cómo funcionará la solución.">

                <img class="paso-img" src="{{ asset('images/diseñoweb.jpg') }}" alt="Diseño">
                <div class="numero">2</div>
                <h3>Diseño</h3>
                <p>
                    Diseñamos una solución tecnológica adaptada a los
                    requerimientos específicos del cliente.
                </p>
            </button>

            <!-- IMPLEMENTACIÓN -->
            <button type="button" class="paso paso-boton"
                data-titulo="Implementación"
                data-descripcion="Desarrollamos e integramos la solución tecnológica propuesta. Realizamos las configuraciones y pruebas necesarias para comprobar que funcione correctamente y responda a los objetivos establecidos.">

                <img class="paso-img" src="{{ asset('images/implementacion5.jpg') }}" alt="Implementación">
                <div class="numero">3</div>
                <h3>Implementación</h3>
                <p>
                    Desarrollamos e integramos la solución asegurando
                    un funcionamiento eficiente.
                </p>
            </button>

            <!-- SOPORTE -->
            <button type="button" class="paso paso-boton"
                data-titulo="Soporte"
                data-descripcion="Brindamos acompañamiento después de implementar la solución. Atendemos dudas, identificamos posibles incidencias y ayudamos a mantener el funcionamiento adecuado del sistema.">

                <img class="paso-img" src="{{ asset('images/soporte5.jpg') }}" alt="Soporte">
                <div class="numero">4</div>
                <h3>Soporte</h3>
                <p>
                    Brindamos acompañamiento continuo para garantizar
                    el correcto desempeño del sistema.
                </p>
            </button>

        </div>
    </div>

    <!-- VENTANA EMERGENTE -->
    <div id="modal-proceso" class="modal-proceso" hidden>

        <div class="modal-contenido" role="dialog" aria-modal="true"
            aria-labelledby="modal-titulo">

            <button type="button" class="modal-cerrar" aria-label="Cerrar ventana">
                &times;
            </button>

            <h2 id="modal-titulo"></h2>

            <p id="modal-descripcion"></p>

            <p class="modal-mensaje">
                Para comenzar a trabajar en esta etapa, inicia sesión en BitMID.
            </p>

            <a href="{{ route('login') }}" class="modal-login">
                Iniciar sesión
            </a>

        </div>
    </div>

</section>


<!-- SERVICIOS -->
<section class="servicios" id="servicios">

    <div class="servicios-contenido">

        <h2 class="etiqueta">SERVICIOS</h2>

        <p class="sub-servicios">Nuestras soluciones</p>

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


        

<button
    type="button"
    class="servicio-boton"
    data-titulo="{{ $servicio['nombre'] }}"
    data-descripcion="{{ $servicio['detalle'] }}"
>
    Conocer más <span>→</span>
</button>

    </div>

@endforeach

        </div>

    </div>

</section>

<!-- VENTANA EMERGENTE DE SERVICIOS -->
<div id="modal-servicio" class="modal-proceso" hidden>

    <div class="modal-contenido" role="dialog" aria-modal="true" aria-labelledby="modal-servicio-titulo">

        <button type="button" class="modal-cerrar" aria-label="Cerrar ventana">
            &times;
        </button>

        <h2 id="modal-servicio-titulo"></h2>

        <p id="modal-servicio-descripcion"></p>

        <p class="modal-mensaje">
            ¿Te interesa implementar esta solución en tu empresa?
            Inicia sesión en BitMID para comenzar.
        </p>

        <a href="{{ route('login') }}" class="modal-login">
            Iniciar sesión
        </a>

    </div>

</div>

    <!-- CONTACTO -->
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

    <!-- PIE DE PÁGINA -->
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


<script>
document.addEventListener('DOMContentLoaded', function () {

    // Seleccionamos los botones de los servicios
    const botones = document.querySelectorAll('.servicio-boton');

    // Seleccionamos la ventana emergente
    const modal = document.getElementById('modal-servicio');

    // Obtenemos los elementos donde aparecerá la información
    const titulo = document.getElementById('modal-servicio-titulo');
    const descripcion = document.getElementById('modal-servicio-descripcion');

    // Botón para cerrar la ventana
    const cerrar = modal ? modal.querySelector('.modal-cerrar') : null;

    // Comprobamos que existan los elementos necesarios
    if (!modal || !titulo || !descripcion || !cerrar) {
        return;
    }

    // Abrir la ventana al hacer clic en cada servicio
    botones.forEach(function (boton) {

        boton.addEventListener('click', function () {

            titulo.textContent = boton.dataset.titulo;
            descripcion.textContent = boton.dataset.descripcion;

            modal.hidden = false;
        });

    });

    // Cerrar con la X
    cerrar.addEventListener('click', function () {
        modal.hidden = true;
    });

    // Cerrar al hacer clic fuera de la ventana
    modal.addEventListener('click', function (event) {

        if (event.target === modal) {
            modal.hidden = true;
        }

    });

    // Cerrar al presionar Escape
    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {
            modal.hidden = true;
        }

    });

});
</script>

</body>
</html>