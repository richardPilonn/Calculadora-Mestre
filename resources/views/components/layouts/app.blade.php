<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <title>{{ $title ?? 'Calculadora Mestre' }}</title>

        @livewireStyles
    </head>
    <body style="background-color: #fff2c0">

@if(Auth::check())
<nav class="navbar navbar-expand-lg " style="background-color: #ff914d;">
    <div class="container-fluid" style="background-color: #ff914d">

        @if(Auth::user()->role === 'aluno')
        <a class="navbar-brand" href="{{ route('aluno.dashboard.dashboard') }}">Página Inicial</a>
        @endif

        @if(Auth::user()->role === 'admin')
        <a class="navbar-brand" href="{{ route('admin.dashboard.dashboard') }}">Página Inicial</a>
        @endif

        @if(Auth::user()->role === 'professor')
        <a class="navbar-brand" href="#">Página Inicial</a>
        @endif

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Configurações</a>
                </li>

                @if(Auth::user()->role === 'aluno')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aluno.perfil.perfil') }}">Perfil</a>
                </li>
                @endif

                @if(Auth::user()->role === 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil</a>
                </li>
                @endif

                @if(Auth::user()->role === 'professor')
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil</a>
                </li>
                @endif


                @if(Auth::user()->role === 'admin')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Cadastrar
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.aluno.create') }}">Aluno</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.professor.create') }}">Professor</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.admin.create') }}">Administrador</a></li>
                    </ul>
                </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
@endif

        

        <div class="container">
            {{ $slot }}
        </div>
       
        @livewireStyles
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
