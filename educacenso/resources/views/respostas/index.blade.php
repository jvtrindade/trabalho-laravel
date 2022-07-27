@extends('base.index')

@section('container')


<a class="btn btn-dark d-grid gap-2 col-6 mx-auto my-3" href="/respostas/create">Novo cadastro</a>

<table class="table table-dark table-bordered table-hover my-3">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Transporte</th>
            <th>Poder público responsável</th>
            <th>Ações</th>
        </tr>
    </thead>
<tbody>

@foreach($respostas as $resposta)
    <tr>
        <td>{{ $resposta->nome_aluno }}</td>
        <td>{{ $resposta->cpf }}</td>
        <td>{{ $resposta->transporte}}</td>
        <td>{{ $resposta->poder_publico_responsavel}}</td>
        <td>
            <a class="btn btn-warning" href="/respostas/{{$resposta->id}}/edit">Editar</a>
            <a class="btn btn-danger" href="/respostas/{{$resposta->id}}/destroy">Remover</a>
         </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
