    <x-header page-css="css/estilos.css"/>

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

<x-servicio
    clase="nosotros"
    id="software"
    imagen="images/software.jpg"
    etiqueta="Desarrollo de software"
    spanClass="etiqueta"
    titulo="Programas a la medida de tu empresa"
    descripcion="Creamos soluciones de software personalizadas para optimizar los procesos de tu empresa, mejorando la eficiencia y productividad."
    :invertido="false"
/>

<x-servicio
    clase="servicios"
    id="web"
    imagen="images/web.jpg"
    etiqueta="Soluciones web"
    spanClass="sub-servicios"
    titulo="Sitios web y aplicaciones web para tu negocio"
    descripcion="Diseñamos y desarrollamos sitios web y aplicaciones web modernas, rápidas y adaptables a las necesidades de tu negocio."
    :invertido="true"
/>

<x-servicio
    clase="servicios"
    id="soporte"
    imagen="images/soporte.jpg"
    etiqueta="Soporte tecnológico"
    spanClass="sub-servicios"
    titulo="Soporte tecnológico para tu empresa"
    descripcion="Ofrecemos mantenimiento y soporte técnico para garantizar el correcto funcionamiento de tus sistemas y aplicaciones."
    :invertido="false"
/>

<x-servicio
    clase="nosotros"
    id="ciberseguridad"
    imagen="images/ciberseguridad.jpg"
    etiqueta="Ciberseguridad"
    spanClass="etiqueta"
    titulo="Protección de tus datos y sistemas"
    descripcion="Implementamos estrategias de ciberseguridad para proteger tus datos y sistemas contra amenazas y ataques."
    :invertido="true"
/>

<x-footer/>