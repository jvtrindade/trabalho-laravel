@extends ('base.index')

@section('container')
    <form action='/respostas/store' method='post'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />

        @include('components.field', [
            'type' => 'hidden',
            'id' => 'id',
            'name' => 'id',
            'label' => '',
            'class' => '',
            'value' => '',
        ])
        @include('components.field', [
            'type' => 'hidden',
            'id' => 'turma_id',
            'name' => 'turma_id',
            'class' => '',
            'label' => '',
            'value' => '',
        ])
        @include('components.field', [
            'type' => 'hidden',
            'id' => 'cidade_id',
            'name' => 'cidade_id',
            'class' => '',
            'label' => '',
            'value' => '',
        ])
        @include('components.field', [
            'type' => 'hidden',
            'id' => 'periodo_id',
            'name' => 'periodo_id',
            'class' => '',
            'label' => '',
            'value' => '',
        ])

        @include('components.field', [
            'type' => 'text',
            'id' => 'nome_aluno',
            'name' => 'nome_aluno',
            'label' => 'Nome',
            'class' => 'form-control',
            'value' => '',
        ])

        @include('components.select', [
            'name' => 'curso_id', //nome do campo no banco
            'label' => 'Curso',
            'coisas' => $cursos,
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

        @include('components.field', [
            'type' => 'text',
            'id' => 'cpf',
            'name' => 'cpf',
            'label' => 'CPF',
            'class' => 'form-control',
            'value' => '',
            'onclick' => '',
        ])

        {{-- <label for="periodo_id">Selecione o período para registro</label>
        <select name="periodo_id" class="form-control" id="periodo_id">
               @foreach ($periodos as $periodo)
                <option value="{{ $periodo->id }}">{{ $periodo->id }}: {{ $periodo->dtinicio }} - {{ $periodo->dtfim }}</option>
               @endforeach
        </select> --}}

        {{-- @include('components.select', [
            'name' => 'turma_id', //nome do campo no banco
            'label' => 'Turma',
            'coisas' => $turmas,
        ]) --}}

        <!-- PEDIR ESTADO COM API -->
        <!-- BUSCAR AS CIDADES -->
        {{-- @include('components.select', [
        'name' => 'transporte',
        'label' => 'Transporte'])
    @section('option')
        @include('components.option', [
            'value' => 'onibus',
            'option' => 'Ônibus'])
        @include('components.option', [
            'value' => 'van',
            'option' => 'Van'])
        @include('components.option', [
            'value' => 'micro',
            'option' => 'Micro-Ônibus'])
<<<<<<< HEAD
    @endsection --}}
        <!-- <label for="transporte">Selecione o Transporte</label>
                        <select name="transporte" class="form-control" id="transporte">
                            <option value="onibus">Ônibus</option>
                            <option value="van">Van</option>
                            <option value="micro">Micro-Ônibus</option>
                        </select>
                        <label for="estado">Selecione o Estado</label>
                        <select name="estado" class="form-control" id="estado">
                            {{-- @foreach ($estados as $estado)
                    <option value="{{$estado->sigla}}">{{$estado->sigla}}</option>
                @endforeach --}}
                        </select>
                        <label for="cidade">Selecione a Cidade</label>
                        <select name="cidade" class="form-control" id="cidade">
                            {{-- @foreach ($cidades as $cidade)
                    <option value="{{$cidade->nome}}">{{$cidade->nome}}</option>
                @endforeach --}}
                        </select> -->
        <p>Poder Público Responsável</p>
        <div style="border: 1px dotted gray;">

            @include('components.field', [
                'type' => 'radio',
                'id' => 'prefeitura',
                'name' => 'poder_publico_responsavel',
                'label' => 'Prefeitura',
                'class' => '',
                'value' => 'Prefeitura',
            ])

            @include('components.field', [
                'type' => 'radio',
                'id' => 'estado',
                'name' => 'poder_publico_responsavel',
                'label' => 'Estado',
                'class' => '',
                'value' => 'Estado',
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
            ])
            @include('components.field', [
                'type' => 'radio',
                'id' => 'nao',
                'name' => 'paga_diferenca',
                'label' => 'Não',
                'class' => '',
                'value' => 'nao',
            ])
        </div>
        @include('components.field', [
            'type' => 'number',
            'id' => 'diferenca_paga',
            'name' => 'diferenca_paga',
            'label' => 'Diferença Paga',
            'class' => 'form-control',
            'value' => '',
        ])
        <a class="btn btn-danger" href="/respostas">Voltar</a>
        @include('components.button', ['type' => 'submit', 'color' => 'primary', 'text' => 'Enviar'])
    </form>
    =======
@endsection--}}
{{-- <label for="transporte">Selecione o Transporte</label>
            <select name="transporte" class="form-control" id="transporte">
                <option value="onibus">Ônibus</option>
                <option value="van">Van</option>
                <option value="micro">Micro-Ônibus</option>
            </select>
            <label for="estado">Selecione o Estado</label>
            <select name="estado" class="form-control" id="estado">
                {{-- @foreach ($estados as $estado)
                    <option value="{{$estado->sigla}}">{{$estado->sigla}}</option>
                @endforeach --}}
{{-- </select>
            <label for="cidade">Selecione a Cidade</label>
            <select name="cidade" class="form-control" id="cidade">
                {{-- @foreach ($cidades as $cidade)
                    <option value="{{$cidade->nome}}">{{$cidade->nome}}</option>
                @endforeach --}}
{{-- </select> --}}
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
        'onclick' => 'document.getElementById("diferenca_paga").disabled=false',
    ])

    @include('components.field', [
        'type' => 'radio',
        'id' => 'nao',
        'name' => 'paga_diferenca',
        'label' => 'Não',
        'class' => '',
        'value' => 'nao',
        'onclick' => 'document.getElementById("diferenca_paga").disabled=true',
    ])
</div>

@include('components.disable', [
    'type' => 'number',
    'id' => 'diferenca_paga',
    'name' => 'diferenca_paga',
    'label' => 'Diferença Paga',
    'class' => 'form-control',
    'value' => '',
    'onclick' => '',
])

<a class="btn btn-danger" href="/respostas">Voltar</a>

@include('components.button', ['type' => 'submit', 'color' => 'primary', 'text' => 'Enviar'])
</form>
>>>>>>> bb477ebed447c613a35a6319f82393108dd80f3d
@endsection
