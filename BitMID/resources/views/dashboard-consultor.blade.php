<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Consultor</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="dashboard">

    <!-- Sidebar -->
    <aside class="sidebar">

        <a href="/" class="logo-link">
            <h2>BitMID</h2>
        </a>

        <p class="rol">Consultor</p>

        <ul>

            <li class="activo">
                <i class="fa-solid fa-chart-line"></i>
                Resumen
            </li>

            <li>
                <i class="fa-solid fa-users"></i>
                Clientes
            </li>

            <li>
                <i class="fa-solid fa-folder"></i>
                Proyectos
            </li>

            <li>
                <i class="fa-solid fa-file-lines"></i>
                Reportes
            </li>

            <li>
                <i class="fa-solid fa-envelope"></i>
                Mensajes
            </li>

            <li>
                <i class="fa-solid fa-gear"></i>
                Configuración
            </li>

        </ul>

    </aside>

    <!-- Contenido -->
    <main class="contenido">

        <div class="topbar">

            <div>
                <h1>Resumen</h1>
                <span>Noviembre 2026</span>
            </div>

            <input
                type="text"
                placeholder="Buscar...">

        </div>

        <!-- estadísticas -->

        <div class="estadisticas">

            <div class="card">
                <h4>Clientes activos</h4>
                <h2>12</h2>
                <p>+3 este mes</p>
            </div>

            <div class="card">
                <h4>Proyectos en curso</h4>
                <h2>8</h2>
                <p>2 prioritarios</p>
            </div>

            <div class="card">
                <h4>Tareas completadas</h4>
                <h2>91%</h2>
                <p>Último trimestre</p>
            </div>

            <div class="card">
                <h4>Ingresos estimados</h4>
                <h2>$128K</h2>
                <p>+18%</p>
            </div>

        </div>

        <div class="secciones">

            <div class="proyectos">

                <h3>Proyectos recientes</h3>

                <div class="proyecto">
                    <strong>Grupo Maya</strong>
                    <p>Sistema ERP</p>
                    <span>Activo</span>
                </div>

                <div class="proyecto">
                    <strong>TecnoRetail</strong>
                    <p>E-commerce</p>
                    <span>En revisión</span>
                </div>

                <div class="proyecto">
                    <strong>Hotel Yucatán</strong>
                    <p>Portal web</p>
                    <span>Pendiente</span>
                </div>

            </div>

            <div class="mensajes">

                <h3>Mensajes recientes</h3>

                <p>Grupo Maya solicitó una reunión.</p>

                <p>TecnoRetail aprobó la propuesta.</p>

                <p>Hotel Yucatán envió documentación.</p>

            </div>

        </div>

    </main>

</div>

</body>
</html>