@extends('base.index')

@section('container')
    <a class="btn btn-success" href="/turmas/create">Incluir Turma</a>
    <table class="table table-dark">
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
                        <a class="btn btn-warning" href="/turmas/edit/{{ $turma->id }}">Alterar</a>
                        <a class="btn btn-primary" href="/turmas/show/{{ $turma->id }}">Ver</a>
                        <a class="btn btn-danger" href="/turmas/destroy/{{ $turma->id }}">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
