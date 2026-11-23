    <x-header/>

    <main>

        <!-- SERVICIOS PARA USUARIOS REGISTRADOS -->
        <section class="servicios" id="servicios">

            <div class="servicios-contenido">

                <h2 class="etiqueta">SERVICIOS</h2>

                <p class="sub-servicios">Nuestras soluciones</p>

                <p class="subtitulo">
                    Tecnología pensada para las necesidades de tu empresa.
                </p>

                <div class="tarjetas">

                    @foreach($servicios as $servicio)

                        <div class="tarjeta">

                            <div class="icono">
                                {{ $servicio['icono'] }}
                            </div>

                            <h3>
                                {{ $servicio['nombre'] }}
                            </h3>

                            <a href="{{ $servicio['ruta'] }}" class="servicio-boton">
                                Comenzar a trabajar <span>→</span>
                            </a>

                        </div>

                    @endforeach

                </div>

            </div>

        </section>

    </main>

</body>
</html>
