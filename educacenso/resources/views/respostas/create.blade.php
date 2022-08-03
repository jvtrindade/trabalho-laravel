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
            'id' => 'turma_id',
            'name' => 'turma_id',
            'class' => '',
            'label' => '',
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
            'value' => '',
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
            'name' => 'curso_id', //nome do campo no banco
            'selected' => '',
            'label' => 'Curso',
            'coisas' => $cursos,
        ])

        @include('components.select', [
            'name' => 'turma_id', //nome do campo no banco
            'selected' => '',
            'label' => 'Turma',
            'coisas' => $turmas,
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
            <option value="micro">Micro-Ônibus</option>
        </select>

        <label for="estado">Selecione o Estado</label>
        <select name="estado" class="form-control" id="estado"></select>

        
        <label for="cidade">Selecione a Cidade</label>
        <select name="cidade" class="form-control" disabled id="cidade"></select>

        <p>Poder Público Responsável</p>
        <div style="border: 1px dotted gray;">

            @include('components.field', [
                'type' => 'radio',
                'id' => 'prefeitura',
                'name' => 'poder_publico_responsavel',
                'label' => 'Prefeitura',
                'class' => '',
                'value' => 'Prefeitura',
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

        </div>
        <p>Paga Diferença?</p>
        <div style="border: 1px dotted gray;">
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
        </div>

        <div id="dpaga" style="display:none">
        @include('components.disable', [
            'type' => 'number',
            'id' => 'diferenca_paga',
            'name' => 'diferenca_paga',
            'label' => 'Diferença Paga',
            'class' => 'form-control',
            'value' => '',
            'onclick' => '',
        ])
        </div>

        <a class="btn btn-danger" href="/respostas">Voltar</a>

        @include('components.button', ['type' => 'submit', 'color' => 'primary', 'text' => 'Enviar'])
    </form>
    </select>
@endsection
