
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soluciones web | BitMID</title>

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

            <div class="solicitud-icono">🌐</div>

            <h1>Soluciones web</h1>

            <p>
                Cuéntanos qué tipo de presencia digital necesita tu empresa.
                Queremos ayudarte a crear una solución web que se adapte
                a tus objetivos y necesidades.
            </p>

        </section>

        <section class="solicitud-formulario">

            <h2>Describe tu proyecto web</h2>

            <p>
                Comparte con nosotros los detalles de la página o aplicación
                que deseas desarrollar.
            </p>

            <form>

                <div class="campo-solicitud">
                    <label for="tipo-web">
                        ¿Qué tipo de solución web necesitas?
                    </label>

                    <select id="tipo-web" name="tipo_web" required>
                        <option value="">Selecciona una opción</option>
                        <option value="pagina-informativa">Página web informativa</option>
                        <option value="tienda-online">Tienda en línea</option>
                        <option value="aplicacion-web">Aplicación web</option>
                        <option value="actualizacion">Actualizar una página existente</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="campo-solicitud">
                    <label for="nombre-web">
                        ¿Tu empresa ya cuenta con una página web?
                    </label>

                    <select id="nombre-web" name="pagina_existente" required>
                        <option value="">Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="campo-solicitud">
                    <label for="objetivo">
                        ¿Cuál es el objetivo principal de tu proyecto?
                    </label>

                    <textarea
                        id="objetivo"
                        name="objetivo"
                        rows="4"
                        placeholder="Ej. Dar a conocer mi empresa, vender productos, ofrecer servicios..."
                        required
                    ></textarea>
                </div>

                <div class="campo-solicitud">
                    <label for="caracteristicas">
                        ¿Qué características o funciones te gustaría incluir?
                    </label>

                    <textarea
                        id="caracteristicas"
                        name="caracteristicas"
                        rows="5"
                        placeholder="Ej. Catálogo de productos, formularios de contacto, pagos en línea, registro de usuarios..."
                    ></textarea>
                </div>

                <div class="campo-solicitud">
                    <label for="referencia">
                        ¿Tienes alguna página de referencia? (Opcional)
                    </label>

                    <input
                        type="url"
                        id="referencia"
                        name="referencia"
                        placeholder="https://ejemplo.com"
                    >
                </div>

                <div class="campo-solicitud">
                    <label for="archivo">
                        Adjuntar documentos o referencias (Opcional)
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
