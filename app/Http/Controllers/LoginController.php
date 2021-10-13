<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Permissao;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $usuario    = Usuario::where('email', $request->email)->first();

        if($usuario){
            if(Hash::check($request->senha , $usuario->senha)){
                session()->put('usuario' , $usuario);
                return redirect()->route('home');
            }else{
                return redirect()->route('login')
                             ->with('login_erro','Senha incorreta!');
            }
        }else{
            return redirect()->route('login')
                             ->with('login_erro','Usuário não existe!');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
