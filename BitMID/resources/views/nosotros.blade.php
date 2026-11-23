<x-header page-css="css/estilos.css" />

<main>
    <x-hero-video
        id="inicio"
        video="images/animacion-bitmid.mp4"
        titulo="NOSOTROS"
        descripcion="Conoce mas de quienes conformamos BitMID"
        color-texto="#172033"
    />

    <x-integrante
        seccion="servicios"
        id="orla"
        imagen="images/orla.jpeg"
        nombre="Orlabel Azcorra"
        etiqueta="LATI"
        clase-etiqueta="sub-servicios"
        descripcion="Encargada de gestión de proyectos, programación front-end y servicios de repostería integral"
    />

    <x-integrante
        seccion="nosotros"
        id="juan"
        imagen="images/juan.jpeg"
        nombre="Juan Sanchez"
        etiqueta="LATI"
        clase-etiqueta="etiqueta"
        descripcion="Encargado de bases de datos, relaciones publicas y responsabilidad social"
        :invertido="true"
    />

    <x-integrante
        seccion="servicios"
        id="Emma"
        imagen="images/ema.jpeg"
        nombre="Emmanuel Soto"
        etiqueta="LATI"
        clase-etiqueta="sub-servicios"
        descripcion="Encargado de programación back-end, seguridad informática y sistemas de comunicación"
    />

    <x-integrante
        seccion="nosotros"
        id="daniel"
        imagen="images/daniel.jpeg"
        nombre="Daniel Tun"
        etiqueta="LATI"
        clase-etiqueta="etiqueta"
        descripcion="Encargado de programación full-stack, diseño gráfico y marketing digital"
        :invertido="true"
    />

    <x-integrante
        seccion="servicios"
        id="adri"
        imagen="images/adri.jpeg"
        nombre="Adriana Rodriguez"
        etiqueta="LATI"
        clase-etiqueta="sub-servicios"
        descripcion="Encargada de sistemas de información, análisis de datos y servicios de catering"
    />
</main>

<x-footer />

</body>
</html>