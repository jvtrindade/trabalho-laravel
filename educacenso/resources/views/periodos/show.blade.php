@extends('base.index')

@section('container')

<ul>
    <li>Ano: {{$periodo->ano}}</li>
    <li>Data de início: {{$periodo->dt_inicio}}</li>
    <li>Data de término: {{$periodo->dt_fim}}</li>
</ul>
<a href="/periodos" class="btn btn-danger">Voltar</a>

@endsection

