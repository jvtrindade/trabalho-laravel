@extends('base.index')

@section('container')
    <form action='/turmas/update/' method='post'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        @include('components.field', [
            'type' => 'hidden',
            'name' => 'id',
            'label' => '',
            'value' => $turma->id,
        ])
        @include('components.field', [
            'type' => 'text',
            'name' => 'nome',
            'label' => 'Nome',
            'value' => $turma->nome,
        ])
            @include ('components.select', [
                'name' => 'curso_id',
                'label' => 'Curso',
                'coisas' => $cursos
            ])
        <div>
            @include('components.button', ['type' => 'button', 'color' => 'danger', 'text' => 'Voltar'])
            @include('components.button', ['type' => 'submit', 'color' => 'success', 'text' => 'Enviar'])
        </div>
    </form>
@endsection
