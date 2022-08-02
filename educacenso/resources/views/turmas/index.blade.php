@extends('base.index')

@section('container')
    <a class="btn btn-dark d-grid gap-2 col-6 mx-auto my-3" href="/turmas/create">Incluir Turma</a>
    <a class="btn btn-dark d-grid gap-2 col-6 mx-auto my-3" href="/home/">Voltar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($turmas as $turma)
                <tr>
                    <td> {{ $turma->nome }} </td>
                    <td> {{ $turma->curso }} </td>
                    <td>
                        <a class="btn btn-secondary" href="/turmas/edit/{{ $turma->id }}">Editar</a>
                        <a class="btn btn-success" href="/turmas/show/{{ $turma->id }}">Ver</a>
                        <a class="btn btn-danger" href="/turmas/destroy/{{ $turma->id }}">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
