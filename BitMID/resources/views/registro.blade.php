<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta | BitMID</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>

<x-auth-card>

        <h2>Crear Cuenta</h2>

        <p>
            Crea tus credenciales para comenzar tu proceso de transformación digital.
        </p>

        <form action="/datos-empresa" method="GET">

            <x-campo-form
            label="Correo electrónico"
            type="email"
            placeholder="ejemplo@empresa.com"
        />

        <x-campo-form
            label="Contraseña"
            type="password"
            placeholder="••••••••"
        />

        <x-campo-form
            label="Confirmar contraseña"
            type="password"
            placeholder="••••••••"
        />

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
</x-auth-card>

</body>
</html>