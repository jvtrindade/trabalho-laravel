@extends('base.index')

@section('container')
<a class="btn btn-success mb-2" href="/periodos/create">Novo Período</a>
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
        @foreach($periodos as $periodo)
            <tr>
                <td>{{$periodo->ano}}</td>
                <td>{{$periodo->dt_inicio}}</td>
                <td>{{$periodo->dt_fim}}</td>
                <td>
                    <a class="btn btn-warning" href="/periodos/{{$periodo->id}}/edit">Editar</a>
                    <a class="btn btn-info" href="/periodos/{{$periodo->id}}/show">Ver</a>
                    <a class="btn btn-danger" href="/periodos/{{$periodo->id}}/destroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
