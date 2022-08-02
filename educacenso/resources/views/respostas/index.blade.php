@extends('base.index')

@section('container')
<a class="btn btn-dark d-grid gap-2 col-6 mx-auto my-3" href="/respostas/create">Novo cadastro</a>

<table class="table table-secondary border-info">
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
            <a class="btn btn-warning" href="/respostas/edit/{{$resposta->id}}">Editar</a>
            <a class="btn btn-info" href="/respostas/show/{{$resposta->id}}">Ver</a>
            <a class="btn btn-danger" href="/respostas/destroy/{{$resposta->id}}">Remover</a>
         </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
