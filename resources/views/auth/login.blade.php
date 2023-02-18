<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('login.login') }}" method="POST">
        @csrf
        <input type="text" name="username" id="">
        <input type="password" name="password" id="">
        <button type="submit">Login</button>
    </form>
</body>
</html>