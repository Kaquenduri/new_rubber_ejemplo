<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\cotizarController;

#Clase middleware
use App\Http\Middleware\VerificarUsuarioRol;


#Rutas para contenidos (Usuarios no autentificados)
Route::get('/',[PaginaController::class, 'inicio'])->name('pagina.inicio');
Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
Route::get('/quienes_somos',[PaginaController::class,'quienes'])->name('pagina.quienes');
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/servicios/{servicio}', [ServicioController::class, 'show'])->name('servicios.show');
Route::get('/proyectos/{proyecto}', [ProyectoController::class, 'show'])->name('proyectos.show');

Route::get('/no-autenticado', function () {
    return view('errores.403_personalizado');
})->name('error.no-autenticado');

Route::get('/login', function(){
    return view('auth.login');
});

#Rutas para usuarios ROL usuario_empresa
Route::middleware(['auth', 'rol:usuario_empresa'])->group(function () {
    Route::get('/cotizar', [cotizarController::class, 'index'])->name('cotizar.index');
});


#Rutas para USUARIO Admin
Route::middleware(['auth', 'rol:admin'])->prefix('admin')->group(function () {
    Route::resource('proyectos', ProyectoController::class)->only(['create', 'store', 'edit', 'destroy', 'update']);
    Route::resource('servicios', ServicioController::class)->only(['create', 'store', 'edit', 'destroy', 'update']);
    ;
});










Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
