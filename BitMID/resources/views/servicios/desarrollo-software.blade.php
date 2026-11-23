
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo de software | BitMID</title>

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <x-header/>

    <main class="solicitud-servicio">

        <section class="solicitud-encabezado">

            <a href="{{ url('/servicios') }}" class="volver-servicios">
                ← Volver a servicios
            </a>

            <div class="solicitud-icono">💻</div>

            <h1>Desarrollo de software</h1>

            <p>
                Cuéntanos qué necesita tu empresa. Nuestro equipo analizará
                tu solicitud para desarrollar una solución tecnológica
                adaptada a tus procesos.
            </p>

        </section>

        <section class="solicitud-formulario">

            <h2>Describe tu proyecto</h2>

            <p>
                Completa la siguiente información para que podamos conocer tus necesidades.
            </p>

            <form
                action="#"
                method="GET"
                onsubmit="alert('¡Tu solicitud está lista! Próximamente podrás enviarla a nuestro equipo.'); return false;"
            >

                <div class="campo-solicitud">

                    <label for="proyecto">
                        ¿Qué tipo de sistema necesitas?
                    </label>

                    <input
                        type="text"
                        id="proyecto"
                        name="proyecto"
                        placeholder="Ej. Sistema de inventarios, ventas, administración..."
                        required
                    >

                </div>

                <div class="campo-solicitud">

                    <label for="necesidad">
                        ¿Qué problema o necesidad deseas resolver?
                    </label>

                    <textarea
                        id="necesidad"
                        name="necesidad"
                        rows="5"
                        placeholder="Describe cómo trabaja actualmente tu empresa y qué te gustaría mejorar..."
                        required
                    ></textarea>

                </div>

                <div class="campo-solicitud">

                    <label for="funciones">
                        ¿Qué funciones te gustaría que tuviera el sistema?
                    </label>

                    <textarea
                        id="funciones"
                        name="funciones"
                        rows="4"
                        placeholder="Menciona las herramientas o características que necesitas..."
                    ></textarea>

                </div>

                <div class="campo-solicitud">

                    <label for="archivo">
                        ¿Tienes algún documento de referencia? (Opcional)
                    </label>

                    <input
                        type="file"
                        id="archivo"
                        name="archivo"
                    >

                </div>

                <button
    type="button"
    class="boton-solicitud"
    onclick="alert('¡Tu solicitud está lista! Próximamente podrás enviarla a nuestro equipo.');"
>
    Enviar solicitud →
</button>

            </form>

        </section>

    </main>

</body>
</html>

