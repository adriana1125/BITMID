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
