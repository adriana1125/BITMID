<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamaño de la Empresa</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <style>
        .login-card h2{
            text-align:center;
            margin-bottom:10px;
            color:#172033;
        }

        .subtitulo{
            text-align:center;
            color:#666;
            margin-bottom:25px;
        }

        .campo{
            margin-bottom:20px;
        }

        .campo label{
            display:block;
            margin-bottom:8px;
            color:#172033;
            font-weight:bold;
        }

        .campo input{
            width:100%;
            padding:14px;
            border:1px solid #ddd;
            border-radius:8px;
            font-size:15px;
        }

        .campo input:focus{
            outline:none;
            border-color:#FF991C;
        }
    </style>
</head>
<body>

    <div class="login-card">

        <img src="{{ asset('images/BITMID2.png') }}" alt="BitMID" class="logo">

        <h2>Tamaño de la Empresa</h2>

        <p class="subtitulo">
            Indica la cantidad total de empleados que laboran actualmente en tu empresa.
        </p>

         <form action="/datos-empresa" method="GET">

            <div class="campo">
                <label for="empleados">
                    Número de empleados
                </label>

                <input
                    type="number"
                    id="empleados"
                    name="empleados"
                    min="1"
                    placeholder="Ejemplo: 25"
                    required>
            </div>

            <button type="submit">
                Continuar
            </button>

        </form>

    </div>

</body>
</html>