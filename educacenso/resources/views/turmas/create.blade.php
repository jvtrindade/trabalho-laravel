@extends('base.index')

@section('container')
    <form action='/turmas/store' method='post'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        @include('components.field', [
            'type' => 'text',
            'name' => 'nome',
            'label' => 'Nome',
            'value' => '',
        ])

        @include ('components.select', [
            'name' => 'curso',
            'label' => 'Curso',
            @foreach ($cursos as $curso)
            'value' => $curso->id,
            'opcao' => $curso->nome,
            @endforeach
        ])
        <div class="mb-3">
            @include('components.button', ['type' => 'button', 'color' => 'danger', 'text' => 'Voltar'])
            @include('components.button', ['type' => 'submit', 'color' => 'success', 'text' => 'Enviar'])
        </div>
    </form>
@endsection