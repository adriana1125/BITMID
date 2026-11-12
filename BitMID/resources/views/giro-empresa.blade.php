<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giro de la Empresa</title>

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
            font-weight:600;
            color:#333;
        }

        .campo select{
            width:100%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:10px;
            font-size:15px;
        }

        .btn-continuar{
            width:100%;
            padding:12px;
            border:none;
            border-radius:10px;
            background:#0056b3;
            color:white;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
        }

        .btn-continuar:hover{
            background:#003f82;
        }
    </style>
</head>
<body>

    <div class="login-card">

        <img src="{{ asset('images/BITMID2.png') }}" alt="BitMID" class="logo">

        <h2>Información sobre la Empresa</h2>
        <p class="subtitulo">
            Selecciona el giro principal de tu empresa.
        </p>

        <form action="/tamano-empresa" method="GET">

            <div class="campo">
                <label for="giro">Giro de la empresa</label>

                <select name="giro" id="giro" required>
                    <option value="">Seleccione una opción</option>

                    <option value="comercio">Comercio</option>
                    <option value="servicios">Servicios</option>
                    <option value="industrial">Manufactura</option>
                </select>
            </div>

             <button type="submit">
                Continuar
            </button>

        </form>

    </div>

</body>
</html>