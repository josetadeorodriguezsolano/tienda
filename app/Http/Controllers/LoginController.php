<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function ingresar(Request $request)
    {
        $usuario = $request->get('usuario');
        $password = $request->get('password');
        $consulta = User::where('nombre',$usuario);
        $user=$consulta->get()->first();
        if ($user)
        {
            if (Hash::check($password,$user->password))
            {
                $request->session()->put('user',$user);
                return redirect('principal');
            }
        }
        Session::flash('error','Nombre de usuario o contraseña incorrectos');
        return redirect('login');
    }
}
