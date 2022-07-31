@extends ('base.index')

@section('container')

<form action='/respostas/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />

    @include('components.field', ['type' => 'hidden', 'id' => 'periodo_id', 'name' => 'periodo_id', "label" => '', 'class' => '', 'value' => ''])
    @include('components.field', ['type' => 'hidden', 'id' => 'id', 'name' => 'id', "label" => '', 'class' => '', 'value' => ''])
    @include('components.field', ['type' => 'hidden', 'id' => 'turma_id', 'name' => 'turma_id', 'class' => '', "label" => '', 'value' => ""])
    @include('components.field', ['type' => 'hidden', 'id' => 'cidade_id', 'name' => 'cidade_id', 'class' => '', "label" => '', 'value' => ''])

    @include('components.field', [
    'type' => 'text',
    'id' => 'nome_aluno',
    'name' => 'nome_aluno',
    'label' => 'Nome',
    'class' => 'form-control',
    'value' => ""])

    @include('components.field', [
    'type' => 'text',
    'id' => 'cpf',
    'name' => 'cpf',
    'label' => 'CPF',
    'class' => 'form-control',
    'value' => ""])

    <!-- PEDIR ESTADO COM API -->
    <!-- BUSCAR AS CIDADES -->
    @include('components.select'), [
        'name' => 'transporte',
        'label' => 'Transporte']
    @section('option')
        @include('components.field', [
            'value' => 'onibus',
            'option' => 'Ônibus'])
        @include('components.field', [
            'value' => 'van',
            'option' => 'Van'])
        @include('components.field', [
            'value' => 'micro',
            'option' => 'Micro-Ônibus'])
    @endsection
    <p>Poder Público Responsável</p>

    @include('components.field', [
    'type' => 'radio',
    'id' => 'prefeitura',
    'name' => 'poder_publico_responsavel',
    'label' => 'Prefeitura',
    'class' => '',
    'value' => "Prefeitura"])

    @include('components.field', [
    'type' => 'radio',
    'id' => 'estado',
    'name' => 'poder_publico_responsavel',
    'label' => 'Estado',
    'class' => '',
    'value' => "Estado"])
    <a class="btn btn-danger" href="/resposta">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'text' => 'Enviar'])
</form>
@endsection