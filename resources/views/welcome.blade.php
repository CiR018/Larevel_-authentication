<!DOCTYPE html>
<html lang="it"
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Benvenuto |Home</title>
        <!--per bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

        <h1>Condivisore di testi!</h1>
      <!--Torna indietro-->

      @if(session('success'))
        {{session('success')}}
     @endif
               

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
        <a class="navbar-brand" href="{{route('pagRegistrazione')}}">Registrazione</a>
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
              

        <!--<form action="" method="POST">
            @csrf
            <label for="testo">Inserisci testo </label>
            <input type="text" name="testo">

            <button type="submit">Invia</button>
        </form>-->
     
        <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="testo" class="form-label">Inserisci testo</label>
            <input type="text" class="form-control" name="testo">
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
        </form>
<!--per bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
      
    </body>
</html>
