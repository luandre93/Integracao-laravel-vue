@extends('master')
@section('content')
    <h1>Lista de Usuários</h1>

    <App :users='@json($users)' style="font-size: 10px;" />
@endsection()
