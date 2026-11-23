@props([
    'id' => 'inicio',
    'video',
    'titulo',
    'descripcion' => '',
    'colorTexto' => '#172033',
])

<section class="hero hero-video" id="{{ $id }}" style="
        position: relative;
        width: 100%;
        height: 450px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background: #172033;
    ">
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
        <source src="{{ asset($video) }}" type="video/mp4">
        Tu navegador no puede reproducir este video.
    </video>

    <div class="hero-contenido hero-video-contenido" style="
            position: relative;
            z-index: 2;
            color: {{ $colorTexto }};
            max-width: 900px;
            padding: 20px;
        ">
        <h1>{{ $titulo }}</h1>

        @if($descripcion)
            <p>{{ $descripcion }}</p>
        @endif
    </div>
</section>
