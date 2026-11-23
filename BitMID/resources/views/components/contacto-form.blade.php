    <section class="contacto" id="contacto">

        <div class="contacto-contenido">

            <h2>¿Tienes un proyecto en mente?</h2>

            <p class="subtitulo">
                Cuéntanos sobre tu proyecto y nos pondremos en contacto contigo.
            </p>

            <form class="formulario">

                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Escribe tu nombre"
                    >
                </div>

                <div class="campo">
                    <label for="correo">Correo electrónico</label>
                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        placeholder="ejemplo@correo.com"
                    >
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea
                        id="mensaje"
                        name="mensaje"
                        placeholder="Cuéntanos sobre tu proyecto"
                        rows="5"
                    ></textarea>
                </div>

                <div
                    class="g-recaptcha campo"
                    data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                ></div>

                @error('captcha')
                    <span class="text-danger" style="color: red; font-size: 0.9em;">
                        {{ $message }}
                    </span>
                @enderror

                <button type="submit">
                    Enviar mensaje
                </button>

            </form>

        </div>

    </section>