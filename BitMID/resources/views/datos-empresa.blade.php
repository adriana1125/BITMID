<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de la Empresa</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <style>
        .login-card{
            width: 500px;
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

        .campo select,
        .campo input{
            width:100%;
            padding:14px;
            border:1px solid #ddd;
            border-radius:8px;
            font-size:15px;
        }

        .campo input:focus,
        .campo select:focus{
            outline:none;
            border-color:#FF991C;
        }
    </style>
</head>

<body>

<div class="login-card">

    <img src="{{ asset('images/BITMID2.png') }}" alt="BitMID" class="logo">

    <h2>Datos de la Empresa</h2>

    <p class="subtitulo">
        Cuéntanos un poco más sobre tu empresa.
    </p>

    <form action="/dashboard-consultor" method="GET">

        <div class="campo">
            <label for="empresa">Nombre de la empresa</label>

            <input
                type="text"
                id="empresa"
                name="empresa"
                maxlength="200"
                placeholder="Ejemplo: Panadería La Esperanza"
                required>
        </div>

        <div class="campo">
            <label for="estado">Estado</label>

            <select id="estado" name="estado" required>

                <option value="">Seleccione un estado</option>

                <option>Aguascalientes</option>
                <option>Baja California</option>
                <option>Baja California Sur</option>
                <option>Campeche</option>
                <option>Chiapas</option>
                <option>Chihuahua</option>
                <option>Ciudad de México</option>
                <option>Coahuila</option>
                <option>Colima</option>
                <option>Durango</option>
                <option>Estado de México</option>
                <option>Guanajuato</option>
                <option>Guerrero</option>
                <option>Hidalgo</option>
                <option>Jalisco</option>
                <option>Michoacán</option>
                <option>Morelos</option>
                <option>Nayarit</option>
                <option>Nuevo León</option>
                <option>Oaxaca</option>
                <option>Puebla</option>
                <option>Querétaro</option>
                <option>Quintana Roo</option>
                <option>San Luis Potosí</option>
                <option>Sinaloa</option>
                <option>Sonora</option>
                <option>Tabasco</option>
                <option>Tamaulipas</option>
                <option>Tlaxcala</option>
                <option>Veracruz</option>
                <option>Yucatán</option>
                <option>Zacatecas</option>

            </select>
        </div>

        <div class="campo">
            <label for="municipio">Municipio</label>

            <input
                type="text"
                id="municipio"
                name="municipio"
                maxlength="50"
                placeholder="Ejemplo: Mérida"
                required>
        </div>

        <div class="campo">
            <label for="administracion">
                ¿Cómo administras actualmente tu negocio?
            </label>

            <select
                id="administracion"
                name="administracion"
                required>

                <option value="">
                    Seleccione una opción
                </option>

                <option value="excel">
                    Excel
                </option>

                <option value="whatsapp">
                    WhatsApp
                </option>

                <option value="papel">
                    Cuadernos o papel
                </option>

                <option value="software">
                    Software administrativo
                </option>

                <option value="sistema-propio">
                    Sistema propio
                </option>

                <option value="otro">
                    Otro
                </option>

            </select>
        </div>

        <button type="submit">
            Finalizar Registro
        </button>

    </form>

</div>

</body>
</html>