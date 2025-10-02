<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::middleware('auth:sanctum')->group(function () {
    //CRUD API REST USER
    Route::get("/user", [UserController::class, "funListar"]);
    Route::post("/user", [UserController::class, "funGuardar"]);
    Route::get("/user/{id}", [UserController::class, "funMostrar"]);
    Route::put("/user/{id}", [UserController::class, "funModificar"]);
    Route::delete("/user/{id}", [UserController::class, "funEliminar"]);
});

// -> Auth (Rutas de autenticcacion) <-
// Comentario1: /api ya existe como prefijo en laravel entonces no es necesario ponerlo
// Por eso nuestras rutas inician /v1 que significa: version 1. Nos servira para versionar nuestras rutas
// Comentario2: Cambiamos el orden de las rutas para ordenar la seguridad
// login y register son publicas es decir todos podran acceder
// profile y logout solo se accedera si el usuario esta autenticado. por eso la restringiremos con middleware

// Para la seguridad Agruparemos las rutas con una funcion anonima Group(function())
// y colocamos el prefijo /v1/auth para no repetir codigo

Route::prefix('/v1/auth')->group(function(){

    Route::post("/login", [AuthController::class, "funLogin"]);
    Route::post("/register", [AuthController::class, "funRegister"]);

    // Estas dos rutas deben ser protegidas por Middleware
    // agrupamos las dos rutas y usamos middleware('auth:sanctum')
    // para verificar que la ruta tiene TOKEN que es la llave
    route::middleware('auth:sanctum')->group(function () {
        Route::get("/profile", [AuthController::class, "funProfile"]);
        Route::post("/logout", [AuthController::class, "funLogout"]);
    });
});




