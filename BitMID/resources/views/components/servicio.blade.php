<section class="{{ $clase }}" id="{{ $id }}">
    <div class="nosotros-contenido">

        @if(!$invertido)
        <div class="nosotros-imagen">
            <img src="{{ asset($imagen) }}" alt="{{ $titulo }}">
        </div>
        @endif

        <div class="nosotros-info">
            <span class="{{ $spanClass }}">
                {{ $etiqueta }}
            </span>

            <h2>
                {{ $titulo }}
            </h2>

            <p>
                {{ $descripcion }}
            </p>
        </div>

        @if($invertido)
        <div class="nosotros-imagen">
            <img src="{{ asset($imagen) }}" alt="{{ $titulo }}">
        </div>
        @endif

    </div>
</section>