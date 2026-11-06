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
});

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