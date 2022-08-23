@extends ('base.index')

@section('container')
    <form action='/respostas/store' method='POST'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />

        @include('components.field', [
            'type' => 'hidden',
            'id' => 'id',
            'name' => 'id',
            'label' => '',
            'class' => '',
            'value' => '',
            'onclick' => '',
        ])
        @include('components.field', [
            'type' => 'hidden',
            'id' => 'uf_id',
            'name' => 'uf_id',
            'label' => '',
            'class' => '',
            'value' => '',
            'onclick' => '',
        ])
        @include('components.field', [
            'type' => 'hidden',
            'id' => 'cidade_id',
            'name' => 'cidade_id',
            'class' => '',
            'label' => '',
            'value' => '',
            'onclick' => '',
        ])
        @include('components.field', [
            'type' => 'hidden',
            'id' => 'periodo_id',
            'name' => 'periodo_id',
            'class' => '',
            'label' => '',
            'value' => $periodo_id,
            'onclick' => '',
        ])

        @include('components.field', [
            'type' => 'text',
            'id' => 'nome_aluno',
            'name' => 'nome_aluno',
            'label' => 'Nome',
            'class' => 'form-control',
            'value' => '',
            'onclick' => '',
        ])

        @include('components.select', [
            'name' => 'curso_id',
            'selected' => '',
            'label' => 'Curso',
        ])

        @include('components.select', [
            'name' => 'turma_id',
            'selected' => '',
            'label' => 'Turma',
        ])

        @include('components.field', [
            'type' => 'text',
            'id' => 'cpf',
            'name' => 'cpf',
            'label' => 'CPF',
            'class' => 'form-control',
            'value' => '',
            'onclick' => '',
        ])

        <label for="transporte">Selecione o Transporte</label>
        <select name="transporte" class="form-control" id="transporte">
            <option value="onibus">Ônibus</option>
            <option value="van">Van</option>
            <option value="microonibus">Micro-Ônibus</option>
        </select>

        <label for="uf">Selecione o Estado</label>
        <select name="uf" class="form-control" id="uf"></select>


        <label for="cidade">Selecione a Cidade</label>
        <select name="cidade" class="form-control" disabled id="cidade"></select>

        <p>Poder Público Responsável</p>


            @include('components.field', [
                'type' => 'radio',
                'id' => 'municipio',
                'name' => 'poder_publico_responsavel',
                'label' => 'Município',
                'class' => '',
                'value' => 'municipio',
                'onclick' => '',
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

        <p>Paga Diferença?</p>
            @include('components.field', [
                'type' => 'radio',
                'id' => 'sim',
                'name' => 'paga_diferenca',
                'label' => 'Sim',
                'class' => '',
                'value' => 'sim',
                'onclick' => "$('#dpaga').css('display','')",
            ])

            @include('components.field', [
                'type' => 'radio',
                'id' => 'nao',
                'name' => 'paga_diferenca',
                'label' => 'Não',
                'class' => '',
                'value' => 'nao',
                'onclick' => "$('#dpaga').css('display','none')",
            ])

        <div id="dpaga" style="display:none">
        @include('components.field', [
            'type' => 'number',
            'id' => 'diferenca_paga',
            'name' => 'diferenca_paga',
            'label' => 'Diferença Paga',
            'class' => 'form-control',
            'value' => '0',
            'onclick' => '',
        ])
        </div>

        <a class="btn btn-danger" href="/respostas">Voltar</a>

        @include('components.button', ['type' => 'submit', 'color' => 'primary', 'text' => 'Enviar'])
    </form>
    </select>
@endsection
