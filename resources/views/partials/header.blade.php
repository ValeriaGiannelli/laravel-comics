<header>

    <div class="container_header">
        <!-- logo -->
        <div class="logo">
            <img src="/img/dc-logo.png" alt="Logo DC">
        </div>

        <!-- menu navigazione -->
        <nav>
            <ul>

                <li>

                    <a class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}" href="{{route('characters')}}" >CHARACTERS</a>
                </li>
                <li>
                    <a class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{route('comics')}}">COMICS</a>
                </li>
                <li>
                    <a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}" >MOVIES</a>
                </li>
                <li>
                    <a href="#" >TV</a>
                </li>
                <li>
                    <a href="#">GAMES</a>
                </li>
                <li>
                    <a href="#" >COLLECTIBLES</a>
                </li>
                <li>
                    <a href="#" >VIDEOS</a>
                </li>
                <li>
                    <a href="#" >FANS</a>
                </li>
                <li>
                    <a href="#" >NEWS</a>
                </li>
                <li>
                    <a href="#" >SHOP</a>
                </li>
            </ul>
        </nav>
    </div>

</header>

