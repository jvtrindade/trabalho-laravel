
@extends ('base.index')

 @section('container')

 <form action ='/respostas/store' method='post'>
    @include('components.field', ['type' => 'hidden', 'id' => 'periodo_id', 'name' => 'periodo_id', 'value' => ''])
   @include('components.field', ['type' => 'hidden', 'id' => 'id', 'name' => 'id', 'value' => ''])
   @include('components.field', ['type' => 'text', 'id' => 'nome_aluno', 'name' => 'nome_aluno', 'label' => 'Nome', 'value' => ""])
   @include('components.field', ['type' => 'hidden', 'id' => 'turma_id', 'name' => 'turma_id', 'value' => ""])
   @include('components.field', ['type' => 'text', 'id' => 'cpf', 'name' => 'cpf', 'label' => 'CPF', 'value' => ""])
   <!-- PEDIR ESTADO COM API -->
   <!-- BUSCAR AS CIDADES -->
   @include('components.field', ['type' => 'hidden', 'id' => 'cidade_id', 'name' => 'cidade_id', 'value' => ''])
   @include('components.field', ['type' => 'radio', 'id' => 'prefeitura', 'name' => 'poder_publico_responsavel', 'label' => 'Prefeitura', 'value' => "Prefeitura"])
   @include('components.field', ['type' => 'radio', 'id' => 'estado', 'name' => 'poder_publico_responsavel', 'label' => 'Estado', 'value' => "Estado"])

   <a class="btn btn-danger" href="/resposta">Voltar</a>
   @include('components.button', ['type' => 'submit', 'color' => 'primary', 'texto' => 'Enviar'])
   <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
 </form>
 @endsection
