
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <title>Mi perfil | BitMID</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f7f8fa;
            color: #192236;
        }

        /* NAVBAR */

        .navbar {
            background: white;
            height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 4%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .logo {
            font-size: 27px;
            font-weight: bold;
            color: #192236;
        }

        .logo span {
            color: #f47721;
        }

        .nav-links {
            display: flex;
            gap: 35px;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }

        .nav-links a:hover {
            color: #f47721;
        }

        .btn-logout {
            background: #ff9418;
            color: #192236;
            border: none;
            padding: 13px 23px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 15px;
        }

        /* CONTENEDOR */

        .container {
            max-width: 1250px;
            margin: 55px auto;
            padding: 0 25px;
        }

        /* BIENVENIDA */

        .welcome {
            margin-bottom: 35px;
        }

        .welcome small {
            color: #f47721;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .welcome h1 {
            font-size: 36px;
            margin: 12px 0;
        }

        .welcome p {
            color: #737987;
            font-size: 16px;
        }

        /* TARJETA PRINCIPAL */

        .profile-header {
            background: white;
            padding: 30px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 5px 25px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            border-left: 5px solid #f47721;
        }

        .company-info h2 {
            font-size: 25px;
            margin-bottom: 10px;
        }

        .company-info p {
            color: #737987;
        }

        .company-type {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 15px;
            border-radius: 20px;
            background: #fff1e4;
            color: #e87519;
            font-size: 13px;
            font-weight: bold;
        }

        .btn-edit {
            background: #192236;
            color: white;
            padding: 13px 22px;
            border-radius: 9px;
            border: none;
            cursor: pointer;
        }

        .btn-edit:hover {
            background: #f47721;
            color: white;
        }

        /* SECCIONES */

        .section-title {
            font-size: 23px;
            margin-bottom: 20px;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
            margin-bottom: 35px;
        }

        .info-card {
            background: white;
            padding: 25px;
            border-radius: 13px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.04);
            transition: 0.2s;
        }

        .info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 22px rgba(0,0,0,0.08);
        }

        .info-card small {
            color: #888e99;
            font-size: 14px;
        }

        .info-card h3 {
            margin-top: 10px;
            font-size: 18px;
            color: #192236;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            background: #fff1e4;
            color: #f47721;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 19px;
            margin-bottom: 15px;
        }

        /* PIE */

        .footer {
            text-align: center;
            padding: 25px;
            color: #888;
            font-size: 14px;
            background: white;
            margin-top: 60px;
        }

        /* RESPONSIVE */

        @media (max-width: 768px) {

            .navbar {
                height: auto;
                padding: 20px;
                flex-wrap: wrap;
                gap: 20px;
            }

            .nav-links {
                order: 3;
                width: 100%;
                justify-content: center;
                gap: 15px;
                flex-wrap: wrap;
            }

            .welcome h1 {
                font-size: 27px;
            }

            .profile-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .profile-grid {
                grid-template-columns: 1fr;
            }

            .btn-edit {
                width: 100%;
            }
        }

    </style>
</head>

<body>

    <!-- NAVBAR -->

   <header>
        <nav class="navbar">

            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('inicio') }}" aria-label="BitMID, ir al inicio">
                    <img src="{{ asset('images/BITMID2.png') }}" alt="Logo de BitMID">
                    <h2>BitMID</h2>
                </a>
            </div>

            <ul class="menu">
                <li><a href="{{ route('soluciones') }}">Soluciones</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>

            <button class="btn-logout">
            Cerrar sesión
        </button>

        </nav>
    </header>


    <main class="container">

        <!-- BIENVENIDA -->

        <div class="welcome">

            <small>PERFIL EMPRESARIAL</small>

            <h1>
                ¡Bienvenido a BitMID!
            </h1>

            <p>
                Consulta y administra la información de tu empresa
                desde un solo lugar.
            </p>

        </div>


        <!-- INFORMACIÓN PRINCIPAL -->

        <div class="profile-header">

            <div class="company-info">

                <h2>
                    {{ $empresa->nombre ?? 'Tecnologías del Sureste S.A. de C.V.' }}
                </h2>

                <p>
                    {{ $empresa->correo ?? 'contacto@empresa.com' }}
                </p>

                <span class="company-type">
                    {{ $empresa->giro ?? 'Servicios' }}
                </span>

            </div>

            <button class="btn-edit">
                Editar perfil
            </button>

        </div>


        <!-- INFORMACIÓN GENERAL -->

        <h2 class="section-title">
            Información general
        </h2>

        <div class="profile-grid">

            <div class="info-card">

                <div class="info-icon">✉</div>

                <small>Correo electrónico</small>

                <h3>
                    {{ $empresa->correo ?? 'contacto@empresa.com' }}
                </h3>

            </div>


            <div class="info-card">

                <div class="info-icon">🏢</div>

                <small>Nombre de la empresa</small>

                <h3>
                    {{ $empresa->nombre ?? 'Tecnologías del Sureste S.A. de C.V.' }}
                </h3>

            </div>


            <div class="info-card">

                <div class="info-icon">📊</div>

                <small>Giro empresarial</small>

                <h3>
                    {{ $empresa->giro ?? 'Servicios' }}
                </h3>

            </div>


            <div class="info-card">

                <div class="info-icon">👥</div>

                <small>Número de empleados</small>

                <h3>
                    {{ $empresa->empleados ?? '15 - 50 empleados' }}
                </h3>

            </div>


            <div class="info-card">

                <div class="info-icon">📍</div>

                <small>Estado</small>

                <h3>
                    {{ $empresa->estado ?? 'Yucatán' }}
                </h3>

            </div>


            <div class="info-card">

                <div class="info-icon">🌎</div>

                <small>Municipio</small>

                <h3>
                    {{ $empresa->municipio ?? 'Mérida' }}
                </h3>

            </div>

        </div>


        <!-- INFORMACIÓN COMPLEMENTARIA -->

        <h2 class="section-title">
            Información complementaria
        </h2>

        <div class="profile-grid">

            <div class="info-card">

                <div class="info-icon">📞</div>

                <small>Teléfono de contacto</small>

                <h3>
                    {{ $empresa->telefono ?? '999 123 4567' }}
                </h3>

            </div>


            <div class="info-card">

                <div class="info-icon">🌐</div>

                <small>Sitio web</small>

                <h3>
                    {{ $empresa->sitio_web ?? 'www.empresa.com' }}
                </h3>

            </div>


            <div class="info-card">

                <div class="info-icon">📅</div>

                <small>Fecha de registro</small>

                <h3>
                    {{ isset($empresa->created_at)
                        ? $empresa->created_at->format('d/m/Y')
                        : '20/11/2026' }}
                </h3>

            </div>


            <div class="info-card">

                <div class="info-icon">📝</div>

                <small>Descripción de la empresa</small>

                <h3>
                    {{ $empresa->descripcion ?? 'Empresa dedicada a ofrecer soluciones tecnológicas.' }}
                </h3>

            </div>

        </div>

    </main>


    <!-- FOOTER -->

    <footer class="footer">

        © 2026 BitMID. Todos los derechos reservados.

    </footer>

</body>
</html>
