<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permissao;

class PermissaoController extends Controller
{
    public function lista_permissoes()
    {
        $funcoes = Permissao::all();
        return view('lista_permissoes' , compact('funcoes'));
    }

    public function pesquisa_permissao(Request $request)
    {
        $id         = $request->input('id_funcao');
        $permissoes = Permissao::Where('id',$id)->first();
        $regras     = explode(',' , $permissoes->permissao);
        $funcoes    = Permissao::all();

        $data = [
            'funcao'     => $permissoes->funcao,
            'permissoes' => $regras,
            'funcoes'    => $funcoes
        ];

        return view('lista_permissoes' , $data);

    }

    public function edita_permissao(Request $request)
    {
        dd($request->all());
    }
}
