@extends('base.index')

@section('container')
    <ul>
        <li>ID: {{ $turma[0]->id }}</li>
        <li>nome: {{ $turma[0]->nome }}</li>
        <li>curso: {{ $turma[0]->cursos }}</li>
        <li>curso_id: {{ $turma[0]->curso_id }}</li>
    </ul>

    <a href="/turmas" class="btn btn-danger">Voltar</a>
@endsection
