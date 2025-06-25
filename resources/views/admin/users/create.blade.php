<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <div>
            <h2>Erros</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
    <header>header</header>    
    <h1>kkkkkk tigres</h1>
    <form action="{{route('users.store')}}" method="POST">
    @csrf()
    <input type="text" name="name" placeholder="Nome" value="{{old('name')}}">
    <input type="text" name="name" placeholder="E-mail" value="{{old('email')}}">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit">Enviar</button>
</form> 
</body>
</html>

<h1>Novo usuário</h1>

