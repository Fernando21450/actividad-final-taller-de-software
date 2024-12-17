<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;

// Rutas de usuarios
Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('users.index');
    Route::get('/users/crearte', 'create')->name('users.create');
    Route::post('/users', 'store')->name('users.store');
    Route::get('/users/{id}/editar', 'edit')->name('users.edit');
    Route::put('/users/{id}', 'update')->name('users.update');
    Route::delete('/users/{id}', 'destroy')->name('users.destroy');
});

// Rutas de roles (opcional, si necesitas gestionarlos)
Route::controller(RolController::class)->group(function () {
    Route::get('/roles', 'index')->name('roles.index');
    Route::get('/roles/crear', 'create')->name('roles.create');
    Route::post('/roles', 'store')->name('roles.store');
});

// Ruta principal
Route::get('/', function () {
    return redirect()->route('users.index');
});