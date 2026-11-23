    <x-header/>

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
        <source src="{{ asset('images/animacion-bitmid.mp4') }}" type="video/mp4">
        Tu navegador no puede reproducir este video.
    </video>

    <div
        class="hero-contenido"
        style="
            position: relative;
            z-index: 2;
            color: #172033;
            max-width: 900px;
            padding: 20px;
        "
    >

        <h1>
            NOSOTROS
        </h1>

        <p>
            Conoce mas de quienes conformamos BitMID 
        </p>

    </div>

</section>

<section class="servicios" id="orla">

    <div class="nosotros-contenido">

        <div class="nosotros-imagen">
            <img src="{{ asset('images/orla.jpeg') }}" alt="Orlabel Azcorra">
        </div>

        <div class="nosotros-info">

            <span class="sub-servicios">
                LATI
            </span>

            <h2>
                Orlabel Azcorra
            </h2>

            <p>
                Encargada de gestión de proyectos, programación front-end y servicios de repostería integral
            </p>

        </div>

        

    </div>

</section>

<section class="nosotros" id="juan">

    <div class="nosotros-contenido">

       

        <div class="nosotros-info">

            <span class="etiqueta">
                LATI
            </span>

            <h2>
                Juan Sanchez
            </h2>

            <p>
                Encargado de bases de datos, relaciones publicas y responsabilidad social
            </p>

        </div>

         <div class="nosotros-imagen">
            <img src="{{ asset('images/juan.jpeg') }}" alt="Juan Sanchez">
        </div>

    </div>

</section>

<section class="servicios" id="Emma">

    <div class="nosotros-contenido">

        <div class="nosotros-imagen">
            <img src="{{ asset('images/ema.jpeg') }}" alt="Emmanuel Soto">
        </div>

        <div class="nosotros-info">

            <span class="sub-servicios">
                LATI
            </span>

            <h2>
                Emmanuel Soto
            </h2>

            <p>
                Encargado de programación back-end, seguridad informática y sistemas de comunicación
            </p>

        </div>

        

    </div>

</section>

<section class="nosotros" id="daniel">

    <div class="nosotros-contenido">

       

        <div class="nosotros-info">

            <span class="etiqueta">
                LATI
            </span>

            <h2>
                Daniel Tun
            </h2>

            <p>
                Encargado de programación full-stack, diseño gráfico y marketing digital
            </p>

        </div>

         <div class="nosotros-imagen">
            <img src="{{ asset('images/daniel.jpeg') }}" alt="Daniel Tun">
        </div>

    </div>

</section>

<section class="servicios" id="adri">

    <div class="nosotros-contenido">

        <div class="nosotros-imagen">
            <img src="{{ asset('images/adri.jpeg') }}" alt="Adriana Rodriguez">
        </div>

        <div class="nosotros-info">

            <span class="sub-servicios">
                LATI
            </span>

            <h2>
                Adriana Rodriguez
            </h2>

            <p>
                Encargada de sistemas de información, análisis de datos y servicios de catering
            </p>

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