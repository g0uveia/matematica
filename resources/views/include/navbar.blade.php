<nav id="math-navbar" class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
            <span class="img-logo">Matemática IFBA</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#math-navbar-links" aria-controls="math-navbar-links" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="math-navbar-links">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contextualizacao')}}">Contextualização</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('videoaulas')}}">Videoaulas</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" role="button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Questões
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('resolucao')}}">Resolução de Questões</a>
                        <a class="dropdown-item" href="{{route('enem')}}">Simulado ENEM</a>
                        <a class="dropdown-item" href="{{route('lista')}}">Lista de Exercícios</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
