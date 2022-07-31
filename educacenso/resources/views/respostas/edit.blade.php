@extends ('base.index')

 @section('container')

 <form action ='/respostas/update' method='post' class="form my-5">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
   @include('components.field', ['type' => 'text', 'id' => 'nome_aluno', 'name' => 'nome_aluno', 'label' => 'Nome', 'class' => 'form-control', 'value' => $resposta->nome_aluno])
   @include('components.field', ['type' => 'text', 'id' => 'cpf', 'name' => 'cpf', 'label' => 'CPF', 'class' => 'form-control', 'value' => $resposta ->cpf])
   <!-- PEDIR ESTADO COM API -->
   <!-- BUSCAR AS CIDADES -->
   @include('components.field', ['type' => 'radio', 'id' => 'prefeitura', 'name' => 'poder_publico_responsavel', 'label' => 'Prefeitura', 'class' => '', 'value' => "Prefeitura"]) <!-- ver dos radios-->
   @include('components.field', ['type' => 'radio', 'id' => 'estado', 'name' => 'poder_publico_responsavel', 'label' => 'Estado', 'class' => '', 'value' => "Estado"])

   <a class="btn btn-danger" href="/resposta">Voltar</a>
   @include('components.button', ['type' => 'submit', 'color' => 'success', 'texto' => 'Alterar'])
 </form>
 @endsection
