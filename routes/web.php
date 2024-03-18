<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/principal', function () {
    return view("principal.index");
})->name("principal.index");
Route::get("/game", [GameController::class, "index"])->name("game.index");
Route::get("/game/enviarDatos", [GameController::class, "enviarDatos"])->name("game.enviarDatos");
Route::post("/game/recogerAjustes", [GameController::class, "recogerAjustes"])->name("game.recogerAjustes");
Route::get("/", [LoginController::class, "login"])->name("login.login");
Route::get("/register", [LoginController::class, "register"])->name("login.register");
Route::post("/login/comprobarSesion", [LoginController::class, "comprobarSesion"])->name("login.comprobarSesion");
Route::post("/register/crearUsuario", [LoginController::class, "crearUsuario"])->name("login.crearUsuario");
Route::get("/puntuacion", [GameController::class, "puntuacion"])->name("game.puntuacion");
Route::post("/game/almacenarPuntuacion", [GameController::class, "almacenarPuntuacion"])->name("game.almacenarPuntuacion");
