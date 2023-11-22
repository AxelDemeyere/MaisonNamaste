<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Maison Namasté</title>
</head>

<body>

    <header class="shadow d-flex justify-content-center">
        <div class="d-flex align-items-center justify-content-between col-8">
            <div class="col-8 d-flex">
            <a href="/"><img style="max-height: 80px" src="/upload/logo.PNG"></a>
            </div>
            <div class=>
                <nav >
                    <a href="/"><button type="button" class="btn btn-outline-secondary">Acceuil</button></a>
                    <a href="/prestations"><button type="button" class="btn btn-outline-secondary">Prestation</button></a>
                    <a href="/about"><button type="button" class="btn btn-outline-secondary">A propos</button></a>
                    @auth
                    <a href="/logout"><button type="button" class="btn btn-outline-secondary">{{ Auth::user()->name }} </button></a>
                    @else
                    <a href="/login"><button type="button" class="btn btn-outline-secondary">Connexion</button></a>
                    @endauth
                    
                </nav>
            </div>
        </div>


    </header>


    <div class="d-flex flex-column">
        @yield('content')
    </div>

    <footer class="d-flex justify-content-center border" >
        <p>Maison Namasté &copy {{ date('Y') }}</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
