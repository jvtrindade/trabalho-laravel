<!DOCTYPE html>
<html lang="pt-BR">
    @include('base.header', ['title' => 'Teste']) <!-- Está incluindo o base.header, passando para a variável teste o valor Teste-->
<body>
    <div class="container">
        @yield('container') <!-- Yield faz com que quando usa um @section('container'), oq está naquela section entra nesse yield --> 
    </div>

    @include('base.footer')
</body>
</html>