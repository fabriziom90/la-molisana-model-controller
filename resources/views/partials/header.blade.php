<header class="bg-white">
    <div id="logo" class="text-center">
        <img src="{{ Vite::asset('resources/img/marchio-sito-test.png')}}" alt="La molisana" />
    </div>
    <div id="main-menu">
        <nav class="navbar-nav container navbar-light">
            <ul class="list-unstyled d-flex justify-content-center text-uppercase mb-0">
                <li class="nav-item p-2 {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('homepage')}}">Homepage</a>
                </li>
                <li class="nav-item p-2 {{ Route::currentRouteName() == 'products' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('products')}}">Prodotti</a>
                </li>
                <li class="nav-item p-2 {{ Route::currentRouteName() == 'news' ? 'active' : ''}}">
                    <a class="nav-link" href="#">News</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
