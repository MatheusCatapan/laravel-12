<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        fdskm
    </header>
    <h1>Usuários</h1>
    <a href="{{ route('users.create') }}">Novo usuário</a>

    <h1>Users</h1>

    @if (session()->has('success'))
        {{session('success')}}
    @endif
     
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><!-- ações aqui --></td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usuário encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}

    <foo>
        
    </foo >
</body>
</html>