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
        .oculto{
            display:none;
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

    <form action="/perfil" method="GET">

    <div class="campo" id="campo-giro">
        <label for="giro">Giro de la empresa</label>

        <select name="giro" id="giro" required>
            <option value="">Seleccione una opción</option>
            <option value="comercio">Comercio</option>
            <option value="servicios">Servicios</option>
            <option value="industrial">Manufactura</option>
        </select>
    </div>

    <div class="campo oculto" id="campo-empleados">
        <label for="empleados">Número de empleados</label>

        <select id="empleados" name="empleados" required>
            <option value="">Seleccione una opción</option>
            <option value="1-10">1 a 10</option>
            <option value="11-50">11 a 50</option>
            <option value="51-250">51 a 250</option>
            <option value="251+">Más de 250</option>
        </select>
    </div>

    <div class="campo oculto" id="campo-nombre">
        <label for="empresa">Nombre de la empresa</label>

        <input
            type="text"
            id="empresa"
            name="empresa"
            maxlength="200"
            placeholder="Ejemplo: Panadería La Esperanza">
    </div>

    <div class="campo oculto" id="campo-estado">
        <label for="estado">Estado</label>

        <select id="estado" name="estado">

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

    <div class="campo oculto" id="campo-municipio">
        <label for="municipio">Municipio</label>

        <input
            type="text"
            id="municipio"
            name="municipio"
            maxlength="50"
            placeholder="Ejemplo: Mérida">
    </div>

    <div class="campo oculto" id="campo-administracion">
        <label for="administracion">
            ¿Cómo administras actualmente tu negocio?
        </label>

        <select id="administracion" name="administracion">

            <option value="">Seleccione una opción</option>
            <option value="excel">Excel</option>
            <option value="whatsapp">WhatsApp</option>
            <option value="papel">Cuadernos o papel</option>
            <option value="software">Software administrativo</option>
            <option value="sistema-propio">Sistema propio</option>
            <option value="otro">Otro</option>

        </select>
    </div>

    <button
        type="submit"
        id="btn-finalizar"
        style="display:none;">
        Finalizar Registro
    </button>

</form>

</div>
<script>
        document.getElementById('giro').addEventListener('change', function () {
            if (this.value !== '') {
                document.getElementById('campo-empleados').style.display = 'block';
            }
        });

        document.getElementById('empleados').addEventListener('change', function () {
            if (this.value !== '') {
                document.getElementById('campo-nombre').style.display = 'block';
            }
        });

        document.getElementById('empresa').addEventListener('input', function () {
            if (this.value.trim() !== '') {
                document.getElementById('campo-estado').style.display = 'block';
            }
        });

        document.getElementById('estado').addEventListener('change', function () {
            if (this.value !== '') {
                document.getElementById('campo-municipio').style.display = 'block';
            }
        });

        document.getElementById('municipio').addEventListener('input', function () {
            if (this.value.trim() !== '') {
                document.getElementById('campo-administracion').style.display = 'block';
            }
        });

        document.getElementById('administracion').addEventListener('change', function () {
            if (this.value !== '') {
                document.getElementById('btn-finalizar').style.display = 'block';
            }
        });
</script>
</body>
</html>