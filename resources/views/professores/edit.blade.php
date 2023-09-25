<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ url('professores/editar') }}" method="POST">
        @csrf
        <!-- campo oculto passando o ID como parâmetro no request -->
        <input type="hidden" name="id" value="{{ $professor['id'] }}">
        <label>Nome:</label><br> <!-- valor preenchido -->
        <input name="nome" type="text" value="{{ $professor['nome'] }}" /><br>
        <label>Idade:</label><br> <!-- valor preenchido -->
        <input name="idade" type="text" value="{{ $professor['idade'] }}" /><br>
        <label>Email:</label><br> <!-- valor preenchido -->
        <input name="email" type="text" value="{{ $professor['email'] }}" /><br>
        <input type="submit" value="Salvar" />
    </form>
</body>

</html>