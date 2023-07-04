<header class="customBox ">
    <nav class=" d-flex justify-content-between align-items-center h-100">
        <div class="logo">
            <a><img class="align-self-center" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC"></a>
        </div>
        <ul class="navbar-nav d-flex flex-row align-items-center">
            @foreach ($navElements as $navElement)
                <li class="nav-item mx-2">{{ $navElement['text'] }}</li>
            @endforeach
        </ul>
        <div class="search">
            <input type="text" name="searchBar" placeholder="Search">
        </div>
    </nav>
</header>