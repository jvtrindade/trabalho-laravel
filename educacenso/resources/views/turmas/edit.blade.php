@extends('base.index')

@section('container')
    <form action='/turmas/update/' method='post'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        <input type="hidden" value="{{ $turma->id }}" name="id" />

        @include('components.field', [
            'id' => 'nome',
            'type' => 'text',
            'name' => 'nome',
            'label' => 'Nome',
            'value' => $turma->nome,
            'class' => 'form-control',
        ])
            @include ('components.select', [
                'name' => 'curso_id',
                'label' => 'Curso',
                'coisas' => $cursos
            ])
        <div>
            <a class="btn btn-danger" href="/turmas">Voltar</a>
            @include('components.button', ['type' => 'submit', 'color' => 'success', 'text' => 'Enviar'])
        </div>
    </form>
@endsection
