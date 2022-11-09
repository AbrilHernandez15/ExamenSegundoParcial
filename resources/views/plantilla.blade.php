<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>El Cyber</title>
    </head>
    <body>
        <!-- <nav class = "navbar navbar-expand-lg navbar-dar bg-dark"  style="background-color: #ff0000">
            <div class = "conteiner-fluid">
                <a class = "navbar-brand" href="/1">1</a>
                <a class = "navbar-brand" href="/2">2</a>
                <a class = "navbar-brand" href="/3">3</a>
                <a class="nav-link {{ request()->routeIs('NInicio') ?'text-warning ':'' }}" href="/">Inicio</a>
                <a class="nav-link {{ request()->routeIs('NAñadir') ?'text-warning ':'' }}" href="añadir">Añadir</a>
                <a class="nav-link {{ request()->routeIs('NOrganizacion') ?'text-warning ':'' }}" href="organizacion">Organización</a>
            </div>
        </nav> -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">El Cyber</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('formulario') }}">Formulario</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('consulta') }}">Consultas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('contenido')
        <footer class="text-center">Hernández Sánchez Abril :(</footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>