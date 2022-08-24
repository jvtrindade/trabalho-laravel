@extends ('base.index')

@section('container')
    <form action='/respostas/update' method='post' class="form my-5">
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        <input type="hidden" value="{{ $resposta->id }}" name="id" />

        @include('components.field', [
            'type' => 'hidden',
            'id' => 'uf',
            'name' => 'uf',
            'label' => '',
            'class' => '',
            'value' => '',
            'onclick' => '',
        ])
        @include('components.field', [
            'type' => 'hidden',
            'id' => 'cidade',
            'name' => 'cidade',
            'class' => '',
            'label' => '',
            'value' => '',
            'onclick' => '',
        ])

        @include('components.field', [
            'type' => 'text',
            'id' => 'nome_aluno',
            'name' => 'nome_aluno',
            'label' => 'Nome',
            'class' => 'form-control',
            'value' => $resposta->nome_aluno,
            'onclick' => '',
        ])

        @include('components.field', [
            'type' => 'text',
            'id' => 'cpf',
            'name' => 'cpf',
            'label' => 'CPF',
            'class' => 'form-control',
            'value' => $resposta->cpf,
            'onclick' => '',
        ])

        @include ('components.select', [
            'selected' => $turma->curso_id,
            'name' => 'curso_id',
            'label' => 'Curso',
            'coisas' => $cursos,
            'id' => 'curso_id',
            'sincrono' => true,
        ])

        @include ('components.select', [
            'selected' => $resposta->turma_id,
            'name' => 'turma_id',
            'label' => 'Turma',
            'coisas' => $turmas,
            'id' => 'turma_id',
            'sincrono' => true,
        ])


        <label for="uf_id">Selecione o Estado</label>
        <select name="uf_id" class="form-control" id="uf_id"></select>

        <label for="cidade_id">Selecione a Cidade</label>
        <select name="cidade_id" class="form-control" disabled id="cidade_id"></select>


        <p>Poder Público Responsável</p>

        @if ($resposta->poder_publico_responsavel == 'municipio')
            @include('components.checked', [
                'type' => 'radio',
                'id' => 'municipio',
                'name' => 'poder_publico_responsavel',
                'label' => 'Município',
                'class' => '',
                'value' => 'municipio',
                'onclick' => '',
                'checked' => 'true',
            ])

            @include('components.field', [
                'type' => 'radio',
                'id' => 'estado',
                'name' => 'poder_publico_responsavel',
                'label' => 'Estado',
                'class' => '',
                'value' => 'Estado',
                'onclick' => '',
            ])
        @else
            @include('components.checked', [
                'type' => 'radio',
                'id' => 'municipio',
                'name' => 'poder_publico_responsavel',
                'label' => 'Município',
                'class' => '',
                'value' => 'municipio',
                'onclick' => '',
                'checked' => 'false',
            ])

            @include('components.checked', [
                'type' => 'radio',
                'id' => 'estado',
                'name' => 'poder_publico_responsavel',
                'label' => 'Estado',
                'class' => '',
                'value' => 'Estado',
                'onclick' => '',
                'checked' => 'true',
            ])
        @endif

        @include('components.field', [
            'type' => 'number',
            'id' => 'diferenca_paga',
            'name' => 'diferenca_paga',
            'label' => 'Diferença Paga',
            'class' => 'form-control',
            'value' => $resposta->diferenca_paga,
            'onclick' => '',
        ])

        <a class="btn btn-danger" href="/respostas">Voltar</a>
        @include('components.button', ['type' => 'submit', 'color' => 'success', 'text' => 'Alterar'])
    </form>
@endsection
