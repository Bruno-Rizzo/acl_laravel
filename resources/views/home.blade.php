@extends('layouts.app')
@section('content')
    <h5>Home</h5>
    <hr>
    Bem vindo <strong>{{session('usuario')->nome}}</strong>
@endsection
