<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
</head>

<body>
    <h3>Lista das Cidades</h3>

    @foreach($cidades as $cidades)
    <li> {{ $cidades['nome'] }} {{ $cidades['uf'] }}</li>
    @endforeach

    <a href="{{ url('cidades/novo') }}">Cadastrar nova Cidade</a>

    <br>

    <a href="{{ url('/welcome') }}">Voltar </a>
</body>

</html>