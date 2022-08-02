@extends('base.index')

@section('container')
<a class="btn btn-dark d-grid gap-2 col-6 mx-auto my-3" href="/periodos/create">Novo Período</a>
<a class="btn btn-dark d-grid gap-2 col-6 mx-auto my-3" href="/home/">Voltar</a>
<table class="table table-striped">
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
                    <a class="btn btn-secondary" href="/periodos/edit/{{$periodo->id}}">Editar</a>
                    <a class="btn btn-success" href="/periodos/show/{{$periodo->id}}">Ver</a>
                    <a class="btn btn-danger" href="/periodos/destroy/{{$periodo->id}}">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
