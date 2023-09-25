<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema ADS UPF</title>
</head>

<body>

    <form action="{{ url('cidades/novo') }}" method="POST">
        @csrf
        <label>Nome:</label><br>
        <input name="nome" type="text" /><br>
        <label>UF:</label><br>
        <input name="uf" type="text" /><br>
        <input type="submit" value="Salvar" />
    </form>

</body>

</html>