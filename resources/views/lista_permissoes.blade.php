@extends('layouts.app')
@section('content')
    <h5>Lista Permissões</h5>
    <hr>
    <form action="{{route('pesquisa_permissao')}}" method="post">
        @csrf
        <div class="col-sm-3">
            <select class="form-select" name="id_funcao">
                <option>Selecione uma Permissão</option>
                    @foreach ($funcoes as $f)
                        <option value="{{$f->id}}">{{$f->funcao}}</option>
                    @endforeach
            </select>
            <button class="btn btn-sm btn-success mt-3" type="submit">Visualizar Permissão</button>
        </div>
    </form>


    @isset($funcao)

    <hr>


    <form action="{{route('edita_permissao')}}" method="post">
        @csrf

        <div class="col-sm-11 mt-3">

            <h5>Perfil: {{strtoupper($funcao)}}</h5>

            <div class="mt-3">
                <p style="color: #555"><strong>Controles de Usuário</strong></p>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="show_usuario" @if(in_array('show_usuario' , $permissoes)) checked @endif>
                <label class="form-check-label">Visualiza Usuário</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="edit_usuario" @if(in_array('edit_usuario' , $permissoes)) checked @endif>
                <label class="form-check-label">Edita Usuário</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="add_usuario" @if(in_array('add_usuario' , $permissoes)) checked @endif>
                <label class="form-check-label">Adiciona Usuário</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="del_usuario" @if(in_array('del_usuario' , $permissoes)) checked @endif>
                <label class="form-check-label">Exclui Usuário</label>
            </div>

            <div class="mt-3">
                <p style="color: #555"><strong>Controles de Permissões</strong></p>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="show_permissao" @if(in_array('show_permissao' , $permissoes)) checked @endif>
                <label class="form-check-label">Visualiza Permissão</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="edit_permissao" @if(in_array('edit_permissao' , $permissoes)) checked @endif>
                <label class="form-check-label">Edita Permissão</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="add_permissao" @if(in_array('add_permissao' , $permissoes)) checked @endif>
                <label class="form-check-label">Adiciona Permissão</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="del_permissao" @if(in_array('del_permissao' , $permissoes)) checked @endif>
                <label class="form-check-label">Exclui Permissão</label>
            </div>

            <div class="mt-3">
                <p style="color: #555"><strong>Controles de Menus</strong></p>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="show_menu_home" @if(in_array('show_menu_home' , $permissoes)) checked @endif>
                <label class="form-check-label">Visualiza Home</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="show_menu_usuarios" @if(in_array('show_menu_usuarios' , $permissoes)) checked @endif>
                <label class="form-check-label">Visualiza Usuários</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="show_menu_lista_usuarios" @if(in_array('show_menu_lista_usuarios' , $permissoes)) checked @endif>
                <label class="form-check-label">Visualiza Lista Usuários</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="show_menu_novo_usuario" @if(in_array('show_menu_novo_usuario' , $permissoes)) checked @endif>
                <label class="form-check-label">Visualiza Novo Usuário</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="show_menu_configuracoes" @if(in_array('show_menu_configuracoes' , $permissoes)) checked @endif>
                <label class="form-check-label">Visualiza Configurações</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="show_menu_lista_permissoes" @if(in_array('show_menu_lista_permissoes' , $permissoes)) checked @endif>
                <label class="form-check-label">Visualiza Lista Permissões</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="permissao[]" value="show_menu_nova_permissao" @if(in_array('show_menu_nova_permissao' , $permissoes)) checked @endif>
                <label class="form-check-label">Visualiza Nova Permissão</label>
            </div>

            <br>

            <button class="btn btn-sm btn-success mt-4" type="submit">Edita Permissão</button>

        </div>

    </form>


    @endisset



@endsection
