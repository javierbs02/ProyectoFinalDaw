<?php

namespace App\Http\Controllers;

use App\Models\Ajuste;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view("login.login");
    }

    public function register()
    {
        return view("login.register");
    }

    public function comprobarSesion(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user' => [
                'required',
                'string',
                'max:255',
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $usuario = Usuario::where("user", $request->user)->first();
        if ($usuario) {
            if ($usuario->password == $request->password) {
                Session::put("usuario", $usuario);
                return redirect()->route('principal.index');
            } else {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }
        else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function crearUsuario(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user' => [
                'required',
                'string',
                'max:255',
                Rule::unique('usuarios', 'user'),
            ],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $usuario = new Usuario();
        $usuario->user = $request->user;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->bestScore = 0;
        $usuario->perfilId = 1;
        $usuario->save();
        $ajustes = new Ajuste();
        $ajustes->usuarioId = $usuario->id;
        $ajustes->sonidos = true;
        $ajustes->efectos = true;
        $ajustes->save();
        Session::put("usuario", $usuario);

        return redirect()->route('principal.index');
    }
}
