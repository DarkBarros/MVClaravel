<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body> 

    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <label for="">Nome do usuário: </label>
        <input type="text" name="name">

        <label for="">Email do usuário:</label>
        <input type="email" name="email">

        <label for="">Senha do usuário</label>
        <input type="password" name="password">

        <input type="submit" value="Cadastrar usuário">
    </form>
    
</body>
</html>