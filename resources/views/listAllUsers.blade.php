<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    
    <table>
        <tr>
            <td>#ID</td>
            <td>Nome:</td>
            <td>Email:</td>
            <td>Ações:</td>
        </tr>

        @foreach ($users as $user)

        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href=""> Ver Usuário</a>
            <form action="{{route('user.destroy',['user'=>$user->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="user" value="{{$user->id}}">
                    <input type="submit" value="Remover">
                </form>
            </td>
        </tr>

        @endforeach

    </table>
</body>
</html>