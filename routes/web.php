<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('quem-somos', [HomeController::class, 'quemSomos']);
Route::get('missao-visao-valores', [HomeController::class, 'missaoVisaoValores']);
Route::get('compromisso', [HomeController::class, 'compromisso']);
Route::get('consultas-optometria', [HomeController::class, 'consultasOptometria']);
Route::get('consultas-oftalmologia', [HomeController::class, 'consultasOftalmologia']);
Route::get('dicas-lentes', [HomeController::class, 'dicasLentes']);
Route::get('dica-lente-contacto', [HomeController::class, 'dicaLenteContacto']);
Route::get('oculos-graduados', [HomeController::class, 'oculosGraduados']);
Route::get('oculos-sol', [HomeController::class, 'oculosSol']);
Route::get('marcas-exclusivas', [HomeController::class, 'marcasExclusivas']);
Route::get('marcas-representadas', [HomeController::class, 'marcasRepresentadas']);
Route::get('sul-optica-lda', [HomeController::class, 'sulOpticaLda']);
Route::get('novidades', [HomeController::class, 'novidades']);
Route::get('galeria', [HomeController::class, 'galeria']);
Route::get('cadastro', [HomeController::class, 'cadastro']);
Route::post('cadastro', [HomeController::class, 'cadastroStore']);


Route::get('login', [HomeController::class, 'login']);
