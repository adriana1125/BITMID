<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $servicios = [
        [
            'icono' => '💻',
            'nombre' => 'Desarrollo de software',
            'descripcion' => 'Creamos sistemas personalizados para mejorar los procesos de tu empresa.'
        ],
        [
            'icono' => '🌐',
            'nombre' => 'Soluciones web',
            'descripcion' => 'Diseñamos páginas y aplicaciones web modernas, rápidas y adaptables.'
        ],
        [
            'icono' => '⚙️',
            'nombre' => 'Soporte tecnológico',
            'descripcion' => 'Te ayudamos a mantener y mejorar la infraestructura tecnológica.'
        ],
        [
            'icono' => '🔒',
            'nombre' => 'Ciberseguridad',
            'descripcion' => 'Protegemos la información y los sistemas de tu empresa.'
        ]
    ];

    return view('inicio', compact('servicios'));
})->name('inicio');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/recuperar-password', function () {
    return view('recuperar-password');
})->name('password.request');

Route::post('/recuperar-password', function () {
    return back()->with('success', 'Se ha enviado un enlace de recuperación.');
})->name('password.email');

Route::get('/dashboard-consultor', function () {
    return view('dashboard-consultor');
});

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

    return redirect()->route('perfil');
})->name('sesion.demo');

// Cerrar sesión
Route::post('/cerrar-sesion', function () {
    session()->forget('usuario_demo');

    request()->session()->regenerateToken();

    return redirect()->route('inicio');
})->name('cerrar.sesion');

Route::get('/perfil', function () {

    if (!session()->has('usuario_demo')) {
        return redirect()->route('login');
    }

    return view('perfil');

})->name('perfil');

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
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');
