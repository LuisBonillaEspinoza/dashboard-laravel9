<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="InputUsername">Username</label>
                <input type="text" name="username" id="InputUsername" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="InputEmail">Email</label>
                <input type="text" name="email" id="InputEmail" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="InputPassword">Contraseña</label>
                <input type="password" name="password" id="InputPassowrd" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="InputPasswordConfirmation">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" id="InputPasswordConfirmation" class="form-control">
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if($message = Session::get('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif 
</body>
</html>