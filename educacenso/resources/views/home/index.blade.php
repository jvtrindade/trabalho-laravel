@extends('base.index')

@section('container')

<h1 class="text-center">Dados sobre transporte escolar público para o EDUCACENSO</h1>

{{-- fazer lista  --}}




<ul class="list-group list-group-flush  my-3">
    <li class="list-group-item"><a class="btn btn-secondary d-grid  col-10 mx-auto" href="/respostas/create">Responder formulário</a></li>
    <li class="list-group-item"><a class="btn btn-secondary d-grid  col-10 mx-auto " href="/respostas/show">Ver respostas</a></li>
    <li class="list-group-item"><a class="btn btn-secondary d-grid  col-10 mx-auto " href="/cursos">Gerenciar cursos</a></li>
    <li class="list-group-item"><a class="btn btn-secondary d-grid  col-10 mx-auto " href="/turmas">Gerenciar turmas</a></li>
    <li class="list-group-item"><a class="btn btn-secondary d-grid  col-10 mx-auto " href="/periodos">Gerenciar períodos</a></li>

</ul>


@endsection
