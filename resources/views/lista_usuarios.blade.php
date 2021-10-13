@extends('layouts.app')
@section('content')
    <h5>Lista de Usuários</h5>
    <hr>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Permissão</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $u)
          <tr>
            <th scope="row">{{$u->id}}</th>
            <td>{{$u->nome}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->funcao}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection
