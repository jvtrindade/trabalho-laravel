@extends ('base.index')

@section('container')

<form action="/periodos/store" method="POST">

    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
<div class="mb-3">
<label for="ano" class="form-label">Ano</label>
<input type='number' name='ano' id="ano" min="1950" max='9999' class="form-control" required/>
</div>

@include('components.field', ['type' => 'date', 'id' => 'dt_inicio', 'name' => 'dt_inicio', 'label' => 'varzea', 'value' => ''])
@include('components.field', ['type' => 'date', 'id' => 'dt_fim', 'name' => 'dt_fim', 'label' => 'varzea', 'value' => ''])

@include('components.button', ['color'=> 'success', 'text' => 'Inserir', 'type' => 'submit'])
<a class="btn btn-danger" href="/periodos">Voltar</a>
</form>

@endsection
