@extends('base.index')

@section('container')
<a class="btn btn-dark d-grid gap-2 col-6 mx-auto my-3" href="/respostas/create">Novo cadastro</a>
<a class="btn btn-dark d-grid gap-2 col-6 mx-auto my-3" href="/home/">Voltar</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Período</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Turma</th>
            <th>Transporte</th>
            <th>Poder público responsável</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Diferença paga</th>
            <th>Ações</th>
        </tr>
    </thead>
<tbody>

@foreach($respostas as $resposta)
    <tr>
        <td>{{ $resposta->periodo }}</td>
        <td>{{ $resposta->nome_aluno }}</td>
        <td>{{ $resposta->cpf }}</td>
        <td>{{ $resposta->turma}}</td>
        <td>{{ $resposta->transporte}}</td>
        <td>{{ $resposta->poder_publico_responsavel}}</td>
        <td>{{ $resposta->cidade}}</td>
        <td>{{ $resposta->uf}}</td>
        <td>{{ $resposta->diferenca_paga}}</td>
        <td>
            <a class="btn btn-secondary" href="/respostas/edit/{{$resposta->id}}">Editar</a>
            <a class="btn btn-danger" href="/respostas/destroy/{{$resposta->id}}">Remover</a>
         </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
