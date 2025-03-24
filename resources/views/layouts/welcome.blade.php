<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo à Agenda de Contatos</title>
</head>
<body>
    <h1>Bem-vindo à Agenda de Contatos</h1>
    <a href="{{ route('contacts.index') }}">Ir para a Lista de Contatos</a>
    <br>
    <hr>
    <br>

    @yield('content')
</body>
</html>