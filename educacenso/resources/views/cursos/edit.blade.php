@extends ('base.index')

@section('container')

<form action="/periodos/update" method="POST">

    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $periodo->id }}" name="id"/>

@include('components.field', ['type' => 'text', 'id' => 'nome', 'name' => 'nome', 'label' => 'Nome do Curso', 'value' => '{{ $curso->nome }}'])
@include('components.field', ['type' => 'text', 'id' => 'nome_reduzido', 'name' => 'nome_reduzido', 'label' => 'Nome Reduzido do Curso', 'value' => '{{ $curso->nome_reduzido }}'])

@include('components.button', ['color'=> 'success', 'text' => 'Inserir', 'type' => 'submit'])
<a class="btn btn-danger" href="/periodos">Voltar</a>
</form>

@endsection
