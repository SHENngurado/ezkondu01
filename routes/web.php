<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\anunciantesController;
use App\Http\Controllers\sorteosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/admindashboard', function () {
        return view('admin.dashboard');
    })->name('admindashboard');
});



//ADMIN
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/newcliente', function () {
        return view('admin.empresas.newcliente');
    })->name('newcliente');
});

Route::post('/newclienteguardar/', [adminController::class, 'newclienteguardar'])->middleware('auth');
Route::get('/verproveedores/', [adminController::class, 'verproveedores'])->middleware('auth');
Route::get('/infoproveedor/{proveedor_id}', [adminController::class, 'infoproveedor'])->middleware('auth');
Route::get('/editproveedor/{proveedor_id}', [adminController::class, 'editproveedor'])->middleware('auth');
Route::post('/editproveedorguardar/', [adminController::class, 'editproveedorguardar'])->middleware('auth');

Route::post('/annadirpregunta/', [adminController::class, 'annadirpregunta'])->middleware('auth');
Route::post('/editpregunta/', [adminController::class, 'editpregunta'])->middleware('auth');
Route::get('/deletepregunta/{proveedor_id}/{pregunta_id}', [adminController::class, 'deletepregunta'])->middleware('auth');

Route::post('/annadirservicio/', [adminController::class, 'annadirservicio'])->middleware('auth');
Route::post('/editservicio/', [adminController::class, 'editservicio'])->middleware('auth');
Route::get('/deleteservicio/{proveedor_id}/{servicio_id}', [adminController::class, 'deleteservicio'])->middleware('auth');


Route::get('/multimediaproveedor/{proveedor_id}', [adminController::class, 'multimediaproveedor'])->middleware('auth');
Route::post('/annadirfoto/', [adminController::class, 'annadirfoto'])->middleware('auth');
Route::get('/deletefoto/{proveedor_id}/{foto_id}', [adminController::class, 'deletefoto'])->middleware('auth');

//admin anunciantes
Route::get('/anunciantes/', [anunciantesController::class, 'anunciantes'])->middleware('auth');
Route::post('/annadiranunciante/', [anunciantesController::class, 'annadiranunciante'])->middleware('auth');
Route::get('/deleteanunciante/{anunciante_id}', [anunciantesController::class, 'deleteanunciante'])->middleware('auth');

//sorteos
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/mainsorteos', function () {
        return view('admin.sorteos.mainsorteos');
    })->name('sorteos');
});
Route::post('/fechainiciosorteo/', [sorteosController::class, 'fechainiciosorteo'])->middleware('auth');
Route::post('/fechafinsorteo/', [sorteosController::class, 'fechafinsorteo'])->middleware('auth');
Route::post('/premiado/', [sorteosController::class, 'premiado'])->middleware('auth');

Route::get('/mostrarpremiados/', [sorteosController::class, 'mostrarpremiados'])->middleware('auth');

Route::get('/infopremiado/{premiado_id}', [sorteosController::class, 'infopremiado'])->middleware('auth');
Route::post('/editpremiadoguardar/', [sorteosController::class, 'editpremiadoguardar'])->middleware('auth');
Route::post('/editnotaboda/', [sorteosController::class, 'editnotaboda'])->middleware('auth');
Route::get('/deletenotaboda/{premiado_id}/{notaboda_id}', [sorteosController::class, 'deletenotaboda'])->middleware('auth');
Route::post('/annadirnotaboda/', [sorteosController::class, 'annadirnota'])->middleware('auth');


//sorteos
Route::get('/proveedores/', [ProveedoresController::class, 'proveedores'])->middleware('auth');


//PUBLICO
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/tuboda', function () {
        return view('tuboda');
    })->name('tuboda');
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/360', function () {
        return view('360');
    })->name('360');
});

//ESTADISTICAS

Route::get('/estadisticas/', [estadisticasController::class, 'estadisticas'])->middleware('auth');