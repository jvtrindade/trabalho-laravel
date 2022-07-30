@extends('base.index')

@section('container')

<ul>
    <li>Nome do Curso: {{$curso->nome}}</li>
    <li>Nome Reduzido do Curso: {{$curso->nome_reduzido}}</li>
</ul>
<a href="/cursos" class="btn btn-info">Voltar</a>

@endsection

