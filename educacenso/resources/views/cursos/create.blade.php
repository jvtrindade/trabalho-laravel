@extends ('base.index')

@section('container')

<form action="/cursos/store" method="POST">

<input type='hidden' name='_token' value='{{ csrf_token() }}'/>

@include('components.field', ['type' => 'text', 'id' => 'nome', 'name' => 'nome', 'label' => 'Nome do Curso', 'class' => 'form-control', 'value' => '', 'onclick' => '',])
@include('components.field', ['type' => 'text', 'id' => 'nome_reduzido', 'name' => 'nome_reduzido', 'label' => 'Nome Reduzido do Curso', 'class' => 'form-control', 'value' => '', 'onclick' => '',])

@include('components.button', ['color'=> 'success', 'text' => 'Inserir', 'type' => 'submit'])
<a class="btn btn-danger" href="/cursos">Voltar</a>
</form>

@endsection
