<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="login-container">

    <div class="login-card">

        <h2>Recuperar contraseña</h2>

        <p>
            Ingresa tu correo electrónico y te enviaremos instrucciones.
        </p>

        @if(session('success'))
            <div class="mensaje-exito">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="campo">
                <label>Correo electrónico</label>

                <input
                    type="email"
                    name="email"
                    placeholder="ejemplo@correo.com"
                    required>
            </div>

            <button type="submit">
                Enviar enlace
            </button>
        </form>

        <a href="{{ route('login') }}" class="volver">
            ← Regresar al inicio de sesión
        </a>

    </div>

</div>

</body>
</html>