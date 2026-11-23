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

<section class="servicios" id="web">

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


  <x-footer/>