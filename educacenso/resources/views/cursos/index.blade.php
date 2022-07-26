@extends('base.index')

@section('container')
<a class="btn btn-dark d-grid gap-2 col-6 mx-auto my-3" href="/cursos/create">Novo Curso</a>
<a class="btn btn-dark d-grid gap-2 col-6 mx-auto my-3" href="/home/">Voltar</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome do Curso</th>
            <th>Nome Reduzido do Curso</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
            <tr>
                <td>{{$curso->nome}}</td>
                <td>{{$curso->nome_reduzido}}</td>
                <td>
                    <a class="btn btn-secondary" href="/cursos/edit/{{$curso->id}}">Editar</a>
                    <a class="btn btn-success" href="/cursos/show/{{$curso->id}}">Ver</a>
                    <a class="btn btn-danger" href="/cursos/destroy/{{$curso->id}}">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
