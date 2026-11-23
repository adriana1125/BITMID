@props([
    'seccion' => 'nosotros',
    'id',
    'imagen',
    'nombre',
    'descripcion',
    'etiqueta' => 'LATI',
    'claseEtiqueta' => 'etiqueta',
    'invertido' => false,
])

<section class="{{ $seccion }}" id="{{ $id }}">
    <div class="nosotros-contenido">
        @unless($invertido)
            <div class="nosotros-imagen">
                <img
                    src="{{ asset($imagen) }}"
                    alt="{{ $nombre }}"
                    loading="lazy"
                >
            </div>
        @endunless

        <div class="nosotros-info">
            <span class="{{ $claseEtiqueta }}">{{ $etiqueta }}</span>
            <h2>{{ $nombre }}</h2>
            <p>{{ $descripcion }}</p>
        </div>

        @if($invertido)
            <div class="nosotros-imagen">
                <img
                    src="{{ asset($imagen) }}"
                    alt="{{ $nombre }}"
                    loading="lazy"
                >
            </div>
        @endif
    </div>
</section>
