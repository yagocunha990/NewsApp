<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewApp</title>
    <link rel="stylesheet" href={{ asset("css/bootstrap.min.css")}}>
</head>
<body>
 <div class="container">
        <!--CABEÇALHO E NAVEGAÇÃO-->
        @include('layouts.nav')
        <!--CONTEUDO-->
        @yield('conteudo')
        <!--RODAPE-->
        @include('layouts.rodape')
 </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src={{asset("js/bootstrap.min.js")}} ></script>
</body>
</html>
