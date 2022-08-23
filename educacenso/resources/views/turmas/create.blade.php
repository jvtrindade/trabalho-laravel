@extends('base.index')

@section('container')
    <form action='/turmas/store' method='post'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        @include('components.field', [
            'id' => 'turma',
            'type' => 'text',
            'name' => 'nome',
            'label' => 'Nome',
            'value' => '',
            'onclick' => '',
            'class' => 'form-control',
        ])

        @include ('components.select', [
            'name' => 'curso_id', //nome do campo no banco
            'selected' => '',
            'label' => 'Curso',
            'coisas' => '',
            'id' => 'curso_id',
            'sincrono' => false,
            ])
        <div class="mb-3">
            <a class="btn btn-danger" href="/turmas">Voltar</a>
            @include('components.button', ['type' => 'submit', 'color' => 'success', 'text' => 'Enviar'])
        </div>
    </form>
@endsection
