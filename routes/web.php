<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/PR', function() {
    return "Proyecto Pollito Rico en proceso...";
    //return ["Hola"];
    //return["Proyecto en curso" => "Pollito Rico..."];
});

route::get('/personas', function(){
    $persona1 = [
        "nombre" => "JUAN",
        "edad" => "50",
        "direccion" => [
            "pais" => "México",
            "ciudad" => "CDMX",
            "zona" => "11"
        ]
    ];

    $persona2 = [
        "nombre" => "Maria",
        "edad" => "20",
        "direccion" => [
            "pais" => "Bolivia",
            "ciudad" => "La Paz",
            "zona" => "Av. 123 Z. ABC"
        ]
    ];

    return [$persona1, $persona2];
});