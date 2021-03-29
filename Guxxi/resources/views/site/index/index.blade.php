<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data" action="{{route('teste')}}">
            @csrf
            <label>Nome</label>
            <input type="text" name="name" value="Fábio Gilberto">
            <label>Email</label>
            <input type="text" name="email" value="teste@teste">
            <label>Data de nascimento</label>
            <input type="date" name="datebirth" value="2021-03-29">
            <label>Senha</label>
            <input type="password" name="password" value="12345678">
            <label>Papel</label>
            <input type="text" name="role_id" value="1">
            <input type="file" name="photo">
            <input type="submit" value="enivar">
        </form>
        <br>
        <br>
        @forelse($users as $user)
            <ul>
                <li><img src="{{Image::make($user->photo)->response()}}"></li>
            </ul>
        @empty
            <p>Nenhum usuário encontrado</p>
        @endforelse

    </body>
</html>
