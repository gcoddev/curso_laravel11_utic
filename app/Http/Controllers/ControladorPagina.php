<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControladorPagina extends Controller
{
    public function home()
    {
        $mensaje = "Hola";
        return view('home', compact('mensaje'));
    }

    public function acercade()
    {
        return view('acercade');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        // Validación de formularios
        $request->validate([
            'usuario' => 'required',
            'password' => 'required',
        ], [
            'usuario.required' => 'El campo usuario es requerido',
            'password.required' => 'El campo contraseña es requerido',
        ]);

        // Autenticación
        if (!Auth::attempt(['usuario' => $request->usuario, 'password' => $request->password])) {
            return back()->with(['error' => 'Credenciales incorrectas']);
        }

        return redirect()->route('tareas')->with(['mensaje' => 'Inicio de session correcto']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with(['mensaje' => 'Sesion cerrada con exito']);
    }
}
