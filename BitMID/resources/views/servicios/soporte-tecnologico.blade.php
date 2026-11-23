
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte tecnológico | BitMID</title>

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

            <div class="solicitud-icono">⚙️</div>

            <h1>Soporte tecnológico</h1>

            <p>
                Cuéntanos qué inconvenientes tecnológicos presenta tu empresa.
                Queremos ayudarte a mantener tus equipos y sistemas funcionando
                correctamente.
            </p>

        </section>

        <section class="solicitud-formulario">

            <h2>Describe tu necesidad de soporte</h2>

            <p>
                Proporciona información sobre el problema para que podamos
                comprender mejor tu situación.
            </p>

            <form>

                <div class="campo-solicitud">
                    <label for="tipo-soporte">
                        ¿Qué tipo de soporte necesitas?
                    </label>

                    <select id="tipo-soporte" name="tipo_soporte" required>
                        <option value="">Selecciona una opción</option>
                        <option value="equipos">Mantenimiento de equipos</option>
                        <option value="software">Problemas con programas o aplicaciones</option>
                        <option value="redes">Problemas de conexión o redes</option>
                        <option value="instalacion">Instalación o configuración de software</option>
                        <option value="mantenimiento">Mantenimiento preventivo</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="campo-solicitud">
                    <label for="equipo">
                        ¿Qué equipo o sistema presenta el problema?
                    </label>

                    <input
                        type="text"
                        id="equipo"
                        name="equipo"
                        placeholder="Ej. Computadora, impresora, servidor, sistema..."
                        required
                    >
                </div>

                <div class="campo-solicitud">
                    <label for="problema">
                        Describe el problema que estás experimentando
                    </label>

                    <textarea
                        id="problema"
                        name="problema"
                        rows="5"
                        placeholder="Explica qué sucede, desde cuándo ocurre y cómo afecta las actividades de tu empresa..."
                        required
                    ></textarea>
                </div>

                <div class="campo-solicitud">
                    <label for="frecuencia">
                        ¿Con qué frecuencia ocurre el problema?
                    </label>

                    <select id="frecuencia" name="frecuencia" required>
                        <option value="">Selecciona una opción</option>
                        <option value="constante">Constantemente</option>
                        <option value="diario">Todos los días</option>
                        <option value="ocasional">Ocasionalmente</option>
                        <option value="una-vez">Solo ocurrió una vez</option>
                    </select>
                </div>

                <div class="campo-solicitud">
                    <label for="impacto">
                        ¿Cómo afecta este problema a tu empresa?
                    </label>

                    <textarea
                        id="impacto"
                        name="impacto"
                        rows="4"
                        placeholder="Ej. Retrasa el trabajo, impide utilizar un sistema, afecta la atención a clientes..."
                    ></textarea>
                </div>

                <div class="campo-solicitud">
                    <label for="archivo">
                        Adjuntar imagen o documento del problema (Opcional)
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
