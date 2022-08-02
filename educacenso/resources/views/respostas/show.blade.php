@extends('base.index')

@section('container')
<table class="table table-secondary border-info">
    <thead>
        <tr>
            <th>Ano</th>
            <th>Data início</th>
            <th>Data fim</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($respostas as $resposta)
            <tr>
                <td>{{$resposta->nome_aluno}}</td>
                {{-- <td>{{$resposta->dt_inicio}}</td>
                <td>{{$resposta->dt_fim}}</td> --}}
                <td>
                    <a class="btn btn-warning" href="/periodos/edit/{{$periodo->id}}">Editar</a>
                    <a class="btn btn-info" href="/periodos/show/{{$periodo->id}}">Ver</a>
                    <a class="btn btn-danger" href="/periodos/destroy/{{$periodo->id}}">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

