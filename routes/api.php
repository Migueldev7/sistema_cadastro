<?php
use  App\Http\Controllers\ControladorCategoria;
use Illuminate\Http\Request;
use App\Http\Controllers\ControladorProduto;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/categorias', [ControladorCategoria::class, 'indexJson']);



Route::resource('/produtos', ControladorProduto::class);