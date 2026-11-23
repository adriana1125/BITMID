<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta | BitMID</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>

<div class="login-container">

    <div class="login-card">

        <img src="{{ asset('images/BITMID2.png') }}" alt="BitMID" class="logo">

        <h2>Crear Cuenta</h2>

        <p>
            Crea tus credenciales para comenzar tu proceso de transformación digital.
        </p>

        <form action="/giro-empresa" method="GET">

            <div class="campo">
                <label>Correo electrónico</label>
                <input
                    type="email"
                    placeholder="ejemplo@empresa.com"
                    required>
            </div>

            <div class="campo">
                <label>Contraseña</label>
                <input
                    type="password"
                    placeholder="••••••••"
                    required>
            </div>

            <div class="campo">
                <label>Confirmar contraseña</label>
                <input
                    type="password"
                    placeholder="••••••••"
                    required>
            </div>

           <button type="submit">
                Registrarme
            </button>
        </form>

        <div style="margin-top:20px; text-align:center;">

            <p style="margin-bottom:10px;">
                ¿Ya tienes una cuenta?
            </p>

            <a href="/login" class="volver">
                Iniciar sesión
            </a>

        </div>

    </div>

</div>

</body>
</html>