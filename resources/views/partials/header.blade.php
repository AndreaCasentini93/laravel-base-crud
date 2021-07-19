<header>
    <nav class="container d-flex justify-content-between align-items-center">
        <a href="{{ route('home') }}">
        <img src="{{ asset('img/logo.png') }}" alt="Logo DC Comics">
        </a>
        <ul class="d-flex">
            <li class="{{ Route::currentRouteName() == 'home'? 'active':'' }}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'comics.index'? 'active':'' }}">
                <a href="{{ route('comics.index') }}">Index</a>
            </li>
        </ul>
    </nav>
</header>