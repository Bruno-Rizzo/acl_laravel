<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function lista_usuarios()
    {
      /*$usuarios = Usuario::join('permissoes','permissoes.id','=','usuarios.id_permissao')
                           ->get();
        return view('lista_usuarios' , compact('usuarios'));*/
        $permissoes = DB::table('permissoes')
                         ->where('id', session('usuario')->id)
                         ->select('permissao')
                         ->first();
        if(in_array('show_menu_usuarios',explode(',',$permissoes->permissao))){
            dd('Ok , liberado');
        }else{
            dd('Erro , Não Liberado');
        }

    }
}
