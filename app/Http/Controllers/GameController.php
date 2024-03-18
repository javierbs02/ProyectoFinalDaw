<?php

namespace App\Http\Controllers;

use App\Models\Ajuste;
use App\Models\Puntuacion;
use App\Models\Usuario;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    public function index(){
        return View("Juego.index");
    }

    public function puntuacion(){
        $usuarios = Usuario::orderBy('bestScore', 'desc')->take(20)->get();
        return View("principal.puntuacion", ["usuarios" => $usuarios]);
    }

    public function almacenarPuntuacion(Request $request){
        $usuario = Session::get("usuario");
        if($usuario->bestScore < $request->puntuacion){
            $usuario->bestScore = $request->puntuacion;
            $usuario->save();
        }
        $puntuacion = new Puntuacion();
        $puntuacion->userId = $usuario->id;
        $puntuacion->puntuacion = $request->puntuacion;
        $puntuacion->save();

        return response()->json(['success' => true]);
    }

    public function enviarDatos(){
        $usuario = Session::get("usuario");
        $ajustes = Ajuste::where("usuarioId", $usuario->id)->first();

        return response()->json($ajustes);
    }

    public function recogerAjustes(Request $request){
        $usuario = Session::get("usuario");
        $ajustes = Ajuste::where("usuarioId", $usuario->id)->first();
        $ajustes->sonidos = $request->sonidos;
        $ajustes->efectos = $request->efectos;
        $ajustes->save();
        return response()->json(['success' => true]);
    }
}
