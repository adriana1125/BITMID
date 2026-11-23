    <x-header page-css="css/estilos.css"/>

    <x-hero-video
        id="inicio"
        video="images/soluciones_bitmid.mp4"
        titulo='Soluciones que ofrecemos'
        descripcion="Gestion, infraestructura y desarrollo de software para tu empresa."
        color-texto="white"
    />

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