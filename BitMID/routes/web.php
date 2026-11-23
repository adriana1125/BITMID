
<?php

use Illuminate\Support\Facades\Route;

// Obtener los servicios de BitMID
function obtenerServicios()
{
    return [
        [
            'icono' => '💻',
            'nombre' => 'Desarrollo de software',
            'descripcion' => 'Creamos sistemas personalizados para mejorar los procesos de tu empresa.',
            'detalle' => 'Desarrollamos soluciones de software adaptadas a las necesidades de cada empresa. Creamos sistemas que permiten automatizar actividades, organizar información y optimizar los procesos de trabajo. Nuestro objetivo es facilitar las operaciones de tu negocio mediante herramientas tecnológicas funcionales y personalizadas.',
            'ruta' => '/servicios/desarrollo-software'
        ],
        [
            'icono' => '🌐',
            'nombre' => 'Soluciones web',
            'descripcion' => 'Diseñamos páginas y aplicaciones web modernas, rápidas y adaptables.',
            'detalle' => 'Diseñamos y desarrollamos páginas web y aplicaciones modernas, intuitivas y adaptables a diferentes dispositivos. Creamos espacios digitales que permiten presentar tu empresa, ofrecer servicios y mejorar la comunicación con tus clientes.',
            'ruta' => '/servicios/soluciones-web'
        ],
        [
            'icono' => '⚙️',
            'nombre' => 'Soporte tecnológico',
            'descripcion' => 'Te ayudamos a mantener y mejorar la infraestructura tecnológica.',
            'detalle' => 'Brindamos acompañamiento para mantener los equipos, sistemas y herramientas tecnológicas de tu empresa en buen funcionamiento. Identificamos problemas, ofrecemos asistencia técnica y proponemos mejoras para reducir interrupciones y facilitar el trabajo diario.',
            'ruta' => '/servicios/soporte-tecnologico'
        ],
        [
            'icono' => '🔒',
            'nombre' => 'Ciberseguridad',
            'descripcion' => 'Protegemos la información y los sistemas de tu empresa.',
            'detalle' => 'Ayudamos a proteger los sistemas y la información de tu empresa frente a riesgos digitales. Identificamos posibles vulnerabilidades, proponemos medidas de prevención y promovemos buenas prácticas para mantener seguros los datos y recursos tecnológicos.',
            'ruta' => '/servicios/ciberseguridad'
        ]
    ];
}

// Página de inicio
Route::get('/', function () {

    $servicios = obtenerServicios();

    return view('inicio', compact('servicios'));

})->name('inicio');

// Inicio de sesión
Route::get('/login', function () {
    return view('login');
})->name('login');

// Recuperar contraseña
Route::get('/recuperar-password', function () {
    return view('recuperar-password');
})->name('password.request');

Route::post('/recuperar-password', function () {
    return back()->with('success', 'Se ha enviado un enlace de recuperación.');
})->name('password.email');

// Dashboard consultor
Route::get('/dashboard-consultor', function () {
    return view('dashboard-consultor');
});

// Registro
Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/registro-empresa', function () {
    return view('registro-empresa');
});

Route::get('/giro-empresa', function () {
    return view('giro-empresa');
});

Route::get('/tamano-empresa', function () {
    return view('tamano-empresa');
});

Route::get('/datos-empresa', function () {
    return view('datos-empresa');
});

// Simular inicio de sesión o registro
Route::post('/sesion-demo', function () {
    session(['usuario_demo' => true]);

    return redirect()->route('servicios');
})->name('sesion.demo');

// Cerrar sesión
Route::post('/cerrar-sesion', function () {
    session()->forget('usuario_demo');

    request()->session()->regenerateToken();

    return redirect()->route('inicio');
})->name('cerrar.sesion');

// Perfil de empresa
Route::get('/perfil', function () {

    if (!session()->has('usuario_demo')) {
        return redirect()->route('login');
    }

    return view('perfil');

})->name('perfil');

// Soluciones
Route::get('/soluciones', function () {
    return view('soluciones');
})->name('soluciones');

// Actualizar información general
Route::post('/perfil/actualizar-general', function (\Illuminate\Http\Request $request) {

    $datos = $request->validate([
        'correo' => 'required|email',
        'nombre' => 'required|string|max:255',
        'giro' => 'required|string|max:100',
        'empleados' => 'required|string|max:100',
        'estado' => 'required|string|max:100',
        'municipio' => 'required|string|max:100',
    ]);

    session(['empresa_general' => $datos]);

    return redirect()->route('perfil')->with('success', 'Información general actualizada correctamente.');

})->name('perfil.actualizar.general');

// Actualizar información complementaria
Route::post('/perfil/actualizar-complementaria', function (\Illuminate\Http\Request $request) {

    $datos = $request->validate([
        'telefono' => 'required|string|max:20',
        'sitio_web' => 'nullable|string|max:255',
        'descripcion' => 'nullable|string|max:1000',
    ]);

    session(['empresa_complementaria' => $datos]);

    return redirect()->route('perfil')->with('success', 'Información complementaria actualizada correctamente.');

})->name('perfil.actualizar.complementaria');

// Contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Catálogo de servicios para usuarios registrados
Route::get('/servicios', function () {

    if (!session()->has('usuario_demo')) {
        return redirect()->route('login');
    }

    $servicios = obtenerServicios();

    return view('servicios', compact('servicios'));

})->name('servicios');

// Formularios individuales de servicios
Route::get('/servicios/desarrollo-software', function () {
    return view('servicios.desarrollo-software');
});

Route::get('/servicios/soluciones-web', function () {
    return view('servicios.soluciones-web');
});

Route::get('/servicios/soporte-tecnologico', function () {
    return view('servicios.soporte-tecnologico');
});

Route::get('/servicios/ciberseguridad', function () {
    return view('servicios.ciberseguridad');
});

// Nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');
