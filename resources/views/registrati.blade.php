<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Area |Registrazione</title>
</head>
<body>
    <h1>Registrazione Utente</h1>

<!--verifico se ci sono errori di inserimenti in base alla validazione effettuata-->
   @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $errore)
                <li>
                    <p>
                        <b>
                        {{ $errore }}
                        </b>
                    </p>
                </li>
                @endforeach   
            </ul>
        </div>
    @endif

    
        
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('home')}}">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="navbar-brand" aria-current="page" href="{{route('pagLogin')}}">Login</a>
                                </li>
                            </ul>
                        </div>
                </div>
        </nav>
           
    

<!--implemento un form che mi permette di effettuare il login validando i dati in precedenza verificati-->
   <!-- <form action="{{route('validazioneRegistrazione')}}" method="POST">
    @csrf
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{old('nome') }}">
        </div>

        <div>
            <label for="cognome">Cognome</label>
            <input type="text" name="cognome" value="{{old('cognome') }}">
        </div>

        <div>
            <label for="eta">Età</label>
            <input type="number" name="eta" value="{{old('eta') }} required">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{old('email') }}">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        <div>
            <label for="password">Conferma Password</label>
            <input type="password" name="password_confirmation" >
        </div>

        <button type="submit">Registrati</button>
</form>-->

<!---bootstrap form-->
        <form action="{{route('validazioneRegistrazione')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" name="nome" value="{{old('nome') }}">
                
            </div>

            <div class="mb-3">
                <label for="cognome" class="form-label">Cognome</label>
                <input type="text" class="form-control" name="cognome" value="{{old('cognome') }}">
            </div>

            <div class="mb-3">
                <label for="eta" class="form-label">Età</label>
                <input type="number" class="form-control" name="eta" value="{{old('eta') }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" >
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Conferma password</label>
                <input type="password" class="form-control" name="password_confirmation" >
            </div>


            
            <button type="submit" class="btn btn-primary">Registrati</button>
        </form>
    <p>Hai già un account? <a href="{{ route('pagLogin') }}">Clicca qui</a> per effettuare il login!</p>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>