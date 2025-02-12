<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Area |Login</title>
</head>
<body>
    <h1>Login Utente</h1>

<!--Torna indietro-->


<nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('home')}}">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="navbar-brand" aria-current="page" href="{{route('pagRegistrazione')}}">Registrazione</a>
                                </li>
                            </ul>
                        </div>
                </div>
        </nav>

<!--verifico se ci sono errori di inserimenti in base alla validazione effettuata-->
    @if ($errors->any())
        <div>
            <ul>
                <li>
                    @foreach ($errors as $errore)
                        <p>{{ $errore }}</p>
                    @endforeach
                </li>
            </ul>
        </div>
    @endif

<!--implemento un form che mi permette di effettuare il login validando i dati in precedenza verificati-->
   <!-- <form action="{{route('validazioneLogin')}}" method="POST">
    @csrf
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{old('email') }}">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Login</button>
    </form>-->

    <form action="{{route('validazioneLogin')}}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{old('email') }}">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" >
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>