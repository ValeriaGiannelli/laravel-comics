@php
    $menu_principale=config('menu_list.main_menu');
@endphp

<header>

    <div class="container_header">
        <!-- logo -->
        <div class="logo">
            <img src="/img/dc-logo.png" alt="Logo DC">
        </div>

        <!-- menu navigazione -->
        <nav>
            <ul>
                @foreach ( $menu_principale as $item )
                    <li>
                        <a class="{{Route::currentRouteName() === $item['name'] ? 'active' : ''}}" href="{{route($item['name'])}}" >{{$item['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>

</header>

