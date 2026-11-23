
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciberseguridad | BitMID</title>

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

            <div class="solicitud-icono">🔒</div>

            <h1>Ciberseguridad</h1>

            <p>
                La seguridad de tu empresa es importante.
                Cuéntanos qué aspectos deseas proteger o qué riesgos
                digitales te preocupan para encontrar una solución adecuada.
            </p>

        </section>

        <section class="solicitud-formulario">

            <h2>Describe tus necesidades de seguridad</h2>

            <p>
                Comparte con nosotros la situación actual de tu empresa
                y qué tipo de protección necesitas.
            </p>

            <form>

                <div class="campo-solicitud">
                    <label for="tipo-seguridad">
                        ¿Qué servicio de ciberseguridad necesitas?
                    </label>

                    <select id="tipo-seguridad" name="tipo_seguridad" required>
                        <option value="">Selecciona una opción</option>
                        <option value="proteccion-datos">Protección de datos e información</option>
                        <option value="seguridad-redes">Seguridad de redes</option>
                        <option value="auditoria">Evaluación de seguridad informática</option>
                        <option value="antivirus">Protección contra virus y malware</option>
                        <option value="copias">Copias de seguridad y recuperación de información</option>
                        <option value="capacitacion">Capacitación en seguridad digital</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="campo-solicitud">
                    <label for="infraestructura">
                        ¿Qué recursos tecnológicos utiliza tu empresa?
                    </label>

                    <textarea
                        id="infraestructura"
                        name="infraestructura"
                        rows="4"
                        placeholder="Ej. Computadoras, servidores, redes, sistemas de gestión, almacenamiento en la nube..."
                        required
                    ></textarea>
                </div>

                <div class="campo-solicitud">
                    <label for="situacion">
                        ¿Has identificado algún problema o riesgo de seguridad?
                    </label>

                    <select id="situacion" name="situacion" required>
                        <option value="">Selecciona una opción</option>
                        <option value="incidente">Sí, hemos tenido un incidente de seguridad</option>
                        <option value="sospecha">Tenemos sospechas de algún riesgo</option>
                        <option value="prevencion">No, buscamos prevenir posibles amenazas</option>
                        <option value="evaluacion">No estamos seguros y necesitamos una evaluación</option>
                    </select>
                </div>

                <div class="campo-solicitud">
                    <label for="descripcion">
                        Describe tu situación o necesidad
                    </label>

                    <textarea
                        id="descripcion"
                        name="descripcion"
                        rows="5"
                        placeholder="Cuéntanos qué deseas proteger, qué dificultades has identificado o qué te gustaría mejorar..."
                        required
                    ></textarea>
                </div>

                <div class="campo-solicitud">
                    <label for="objetivo">
                        ¿Qué te gustaría conseguir con este servicio?
                    </label>

                    <textarea
                        id="objetivo"
                        name="objetivo"
                        rows="3"
                        placeholder="Ej. Proteger información confidencial, evitar accesos no autorizados..."
                    ></textarea>
                </div>

                <div class="campo-solicitud">
                    <label for="archivo">
                        Adjuntar documento de referencia (Opcional)
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
