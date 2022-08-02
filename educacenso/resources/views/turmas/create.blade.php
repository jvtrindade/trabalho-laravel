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
            'class' => 'form-control',
        ])

        @include ('components.select', [
            'name' => 'curso_id',
            'label' => 'Curso',
            'coisas' => $cursos
            ])
        <div class="mb-3">
            @include('components.button', ['type' => 'button', 'color' => 'danger', 'text' => 'Voltar'])
            @include('components.button', ['type' => 'submit', 'color' => 'success', 'text' => 'Enviar'])
        </div>
    </form>
@endsection
