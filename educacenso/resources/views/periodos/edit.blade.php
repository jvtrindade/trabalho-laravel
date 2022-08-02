@extends ('base.index')

@section('container')

<form action="/periodos/update" method="POST">

    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $periodo->id }}" name="id"/>


<div class="mb-3">
<label for="ano" class="form-label">Ano</label>
<input type='number' name='ano' id="ano" min="1950" max='2100' class="form-control" value="{{ $periodo->ano }}" required/>
</div>

@include('components.field', ['type' => 'date', 'id' => 'dt_inicio', 'name' => 'dt_inicio', 'label' => 'Data início', 'class' => 'form-control', 'value' => '{{ $periodo->dt_inicio }}'])
@include('components.field', ['type' => 'date', 'id' => 'dt_fim', 'name' => 'dt_fim', 'label' => 'Data fim', 'class' => 'form-control', 'value' => '{{ $periodo->dt_fim }}'])

@include('components.button', ['color'=> 'success', 'text' => 'Inserir', 'type' => 'submit'])
<a class="btn btn-danger" href="/periodos">Voltar</a>
</form>

{{ $periodo->dt_inicio }}

@endsection
