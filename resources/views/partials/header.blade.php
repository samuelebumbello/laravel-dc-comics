<header>
    <div class="logo">
        <img src="/img/dc-logo.png" alt="Logo">
    </div>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('comics.index') }}">Elenco fumetti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('comics.create') }}">Inserisci nuovo fumetto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
        </li>
    </ul>
</header>
