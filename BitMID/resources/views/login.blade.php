<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | BitMID</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="login-container">

    <div class="login-card">

        <img src="{{ asset('images/BITMID2.png') }}" alt="BitMID" class="logo">

        <h2>Bienvenido de nuevo</h2>

        <p>Ingresa tus credenciales para acceder al sistema.</p>

        <form action="{{ route('sesion.demo') }}" method="POST">
            @csrf

            <div class="campo">
                <label>Correo electrónico</label>
                <input
                    type="email"
                    name="correo"
                    placeholder="ejemplo@bitmid.com"
                    required>
            </div>

            <div class="campo">
                <label>Contraseña</label>
                <input
                    type="password"
                    name="password"
                    placeholder="••••••••"
                    required>
            </div>

            <button type="submit">
                Iniciar sesión
            </button>

        </form>

        <div class="extra-links">
            <a href="{{ route('password.request') }}">
             ¿Olvidaste tu contraseña?
            </a>
        </div>

        <a href="/" class="volver">
            ← Volver al sitio
        </a>

    </div>

</div>

</body>
</html>